<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->get()->take(10);
        $totalSales = Order::where('status','Delivered')->count();
        $totalRevenue = Order::where('status','Delivered')->sum('total');
        $todaySales = Order::where('status','Delivered')->whereDate('created_at',Carbon::today())->count();
        $todayRevenue = Order::where('status','Delivered')->whereDate('created_at',Carbon::today())->sum('total');
        

        return view('livewire.admin.admin-dashboard-component',[
            'orders'=>$orders,
            'totalSales'=>$totalSales,
            'totalRevenue'=>$totalRevenue,
            'todaySales'=>$todaySales,
            'todayRevenue'=>$todayRevenue
            ])->layout('layouts.base');
    }
}
