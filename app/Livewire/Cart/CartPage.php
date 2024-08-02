<?php

namespace App\Livewire\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CartPage extends Component
{
    use LivewireAlert;
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
        return view('livewire.cart.cart-page',[
            'cartItems' => $this->getData()
        ])->extends('layouts.app')->section('content');
    }
}
