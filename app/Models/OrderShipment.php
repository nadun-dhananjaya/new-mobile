<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderShipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'name',
        'contact_no',
        'address',
        'tracking_number',
        'shipment_date',
        'delivery_date',
        'status'
    ];

}

