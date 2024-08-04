<?php

namespace App\Livewire\Order;

use Livewire\Component;

class OrderSuccessMessage extends Component
{
    public function render()
    {
        return view('livewire.order.order-success-message')->extends('layouts.app')->section('content');
    }
}
