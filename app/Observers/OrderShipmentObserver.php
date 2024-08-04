<?php

namespace App\Observers;

use App\Models\OrderShipment;

class OrderShipmentObserver
{
    /**
     * Handle the OrderShipment "created" event.
     */
    public function created(OrderShipment $orderShipment): void
    {
        $trackingNumber = $this->generateCode($orderShipment);
        $orderShipment->update([
            'tracking_number' => $trackingNumber
        ]);
    }

    private function generateCode(orderShipment $model)
    {
        $id = $model->id;
        return 'TR-' . str_pad($id, 6, '0', STR_PAD_LEFT);
    }

    /**
     * Handle the OrderShipment "updated" event.
     */
    public function updated(OrderShipment $orderShipment): void
    {
        //
    }

    /**
     * Handle the OrderShipment "deleted" event.
     */
    public function deleted(OrderShipment $orderShipment): void
    {
        //
    }

    /**
     * Handle the OrderShipment "restored" event.
     */
    public function restored(OrderShipment $orderShipment): void
    {
        //
    }

    /**
     * Handle the OrderShipment "force deleted" event.
     */
    public function forceDeleted(OrderShipment $orderShipment): void
    {
        //
    }
}
