<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_shipments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->string('name')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('address')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('shipment_date')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_shipments');
    }
};
