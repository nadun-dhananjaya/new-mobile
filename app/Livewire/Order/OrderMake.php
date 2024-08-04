<?php

namespace App\Livewire\Order;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderPayment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderMake extends Component
{
    public $name;
    public $contactNo;
    public $address;

    public $paymentType;
    public $cardNumber;
    public $expireDate;
    public $ccv;

    public $orderAmount = 0;

    protected $rules = [
        'name' => 'required|string|max:255',
        'contactNo' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'paymentType' => 'required|string', // Ensure 'card-payment' is included
    ];

    public function getData()
    {
        $user = Auth::user();
        return Cart::where('user_id',$user['id'])->with('product')->get();
    }

    public function qtyUp(Cart $cartItem)
    {
        $cartItem->update([
            'qty'=> $cartItem['qty'] + 1
        ]);
    }

    public function delete(Cart $cartItem)
    {
        // $this->alert('warning', 'Please Login add to card');
        // dd("sss");
         $cartItem->delete();
    }
    public function qtyDown(Cart $cartItem)
    {
        if($cartItem['qty'] == 1)
        {
           $this->delete($cartItem);
        }
        else{
            $cartItem->update([
                'qty'=> $cartItem['qty'] - 1
            ]);
        }
    }

    public function render()
    {
        return view('livewire.order.order-make',[
            'cartItems' => $this->getData()
        ])->extends('layouts.app')->section('content');
    }

    public function getCartTotal($userId)
    {
        // Fetch the cart items with related products
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        // Calculate the total amount
        $totalAmount = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->qty;
        });

        return $totalAmount;
    }

    public function payNow()
    {
        if ($this->paymentType === 'card-payment') {
            $this->rules = array_merge($this->rules, [
                'cardNumber' => 'required|string|max:15',
                'expireDate' => 'required|date|after:today',
                'ccv' => 'required|digits:3',
            ]);
        }
        $this->validate();

        $totalAmount = $this->getCartTotal(Auth::user()->id);

        $order = Order::create([
            'user_id' => Auth::user()->id,
            'order_date' => Carbon::now(),
            'total_amount' => $totalAmount,
            'status' => 'processing'
        ]);

        // order items
        $user = Auth::user();
        $cartItems =  Cart::where('user_id',$user['id'])->with('product')->get();

        foreach($cartItems as $cartItem)
        {
            OrderItem::create([
                'order_id' => $order['id'],
                'product_id' => $cartItem['product_id'],
                'qty' => $cartItem['qty'],
            ]);
        }


        OrderPayment::create([
            'order_id' => $order['id'],
            'payment_method' => $this->paymentType,
            'amount' => $totalAmount,
            'card_last_digits' => $this->cardNumber,
            'date' => Carbon::now()
        ]);

        Cart::where('user_id', Auth::user()->id)->delete();


    }
}
