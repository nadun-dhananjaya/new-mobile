<?php

namespace App\Livewire\Products;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ProductView extends Component
{
    use LivewireAlert;

    public function addCart(Product $product)
    {
        $user = Auth::user();
        if($user != null)
        {
            $existCartItem = Cart::where('product_id',$product['id'])->get();
            if(count($existCartItem) > 0)
            {
                $existCartItem[0]->update([
                    'qty'=> $existCartItem[0]->qty + 1
                ]);
            }
            else{
                Cart::create([
                    'user_id' => $user['id'],
                    'product_id' => $product['id'],
                    'qty' => 1
                ]);
            }
            $this->alert('success', 'product added to cart successfully!');
        }
        else{
            $this->alert('warning', 'Please Login add to card');
        }
    }


    public function render(Request $request)
    {
        $product = Product::find($request->product);
        return view('livewire.products.product-view',[
            'product'=> $product
        ])->extends('layouts.app')->section('content');
    }
}
