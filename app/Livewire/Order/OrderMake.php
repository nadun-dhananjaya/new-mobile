<?php

namespace App\Livewire\Order;

use Livewire\Component;

class OrderMake extends Component
{
    public function render()
    {
        return view('livewire.order.order-make')->extends('layouts.app')->section('content');
    }
}
