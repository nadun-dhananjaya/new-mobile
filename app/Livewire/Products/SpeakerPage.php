<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class SpeakerPage extends Component
{
    public function getData()
    {
        $categoryId = Category::where('name','speakers')->get();
        $products = Product::where('category_id',$categoryId[0]->id)->get();

        return $products;
    }
    public function render()
    {
        return view('livewire.products.speaker-page',[
            'products'=> $this->getData()
        ])->extends('layouts.app')->section('content');
    }
}
