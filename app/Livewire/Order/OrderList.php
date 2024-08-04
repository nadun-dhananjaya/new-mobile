<?php

namespace App\Livewire\Order;

use Livewire\Component;

class OrderList extends Component
{
    public function getData()
    {

    }


    public function render()
    {
        return view('livewire.order.order-list')->extends('layouts.app')->section('content');
    }
}
