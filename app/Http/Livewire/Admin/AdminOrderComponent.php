<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminOrderComponent extends Component
{
    public function updateOrderStatus($order_id,$status)
    {
        $order = Order::find($order_id);
        $order->status = $status;
        if($status == "Delivered")
        {
            $order->delivered_date = DB::raw('NOW()');
        }
        else if($status == "Cancelled")
        {
            $order->canceled_date = DB::raw('NOW()');
        }
        $order->save();
        session()->flash('order_message','Order status has been updated successfully!');
    }
    public function render()
    {
        $orders= Order::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.admin.admin-order-component',['orders'=>$orders])->layout('layouts.base');
    }
}
