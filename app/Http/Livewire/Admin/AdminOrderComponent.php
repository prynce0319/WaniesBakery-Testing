<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Parables\ArkeselSdk\BulkSms\ArkeselSms;

class AdminOrderComponent extends Component
{


    public $year;
    public $month;

    public function updateOrderStatus($order_id,$status)
    {
        $order = Order::find($order_id);
        $order->status = $status;
        if($status == "Delivered")
        {
            $order->delivered_date = DB::raw('NOW()');
            $this->sendsmsmessage($order);

        }
        else if($status == "Cancelled")
        {
            $order->canceled_date = DB::raw('NOW()');
            $this->sendsmsmessagedecline($order);
        }
        $order->save();
        session()->flash('order_message','Order status has been updated successfully!');
    }

    public function sendsmsmessage($order)
        {
            $response = ArkeselSms::make()
            ->message("Dear Customer,
Your order is being delivered.
Kindly send a review to wanies
Best Regards")
            ->recipients($order->mobile)
            /* ->recipients("233234567890,233234567890") */ // alternative
            ->sandbox(false)
            ->send();

        }
public function sendsmsmessagedecline($order)
{
            $response = ArkeselSms::make()
            ->message("Dear Customer,
            Your order has been declined.
            Feel free to order another product from wanies
            Best Regards


            --------- Creating Lingering Memories ----------")
            ->recipients($order->mobile)
            /* ->recipients("233234567890,233234567890") */ // alternative
            ->sandbox(false)
            ->send();

}

    public function filterOrdersByMonth($query)
    {
        if (!empty($this->year) && !empty($this->month)) {
            $month = str_pad($this->month, 2, '0', STR_PAD_LEFT);
            $query->whereRaw("YEAR(created_at) = {$this->year} AND MONTH(created_at) = $month");
        } elseif (!empty($this->year)) {
            $query->whereYear('created_at', '=', $this->year);
        } elseif (!empty($this->month)) {
            $month = str_pad($this->month, 2, '0', STR_PAD_LEFT);
            $query->whereMonth('created_at', '=', $month);
        }
    }

    public function render()
        {
            $orders= Order::orderBy('created_at', 'DESC');
            $this->filterOrdersByMonth($orders);
            $orders = $orders->paginate(10);
            $months = collect([
                1 => 'January',
                2 => 'February',
                3 => 'March',
                4 => 'April',
                5 => 'May',
                6 => 'June',
                7 => 'July',
                8 => 'August',
                9 => 'September',
                10 => 'October',
                11 => 'November',
                12 => 'December',
            ]);
            return view('livewire.admin.admin-order-component',['orders'=>$orders],compact('orders', 'months'))->layout('layouts.base');
        }
}
