<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class HeadPhonesPage extends Component
{
    public function getData()
    {
        $categoryId = Category::where('name','headphones')->get();
        $products = Product::where('category_id',$categoryId[0]->id)->get();

        return $products;
    }
    public function render()
    {
        // dd( $this->getData());
        return view('livewire.products.head-phones-page',[
            'products'=> $this->getData()
        ])->extends('layouts.app')->section('content');
    }
}
