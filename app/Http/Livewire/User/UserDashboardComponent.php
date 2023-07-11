<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $orderspaginate = Order::Where('user_id',Auth::user()->id)->paginate(10);
        $orders = Order::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get()->take(10);
        $totalCost = Order::where('status','!=','Cancelled')->where('user_id',Auth::user()->id)->sum('total');
        $totalPurchase = Order::where('status','!=','Cancelled')->where('user_id',Auth::user()->id)->count();
        $totalDelivered = Order::where('status','Delivered')->where('user_id',Auth::user()->id)->count();
        $totalCancelled = Order::where('status','Cancelled')->where('user_id',Auth::user()->id)->count();
        return view('livewire.user.user-dashboard-component',['orderspaginate'=>$orderspaginate,'orders'=>$orders,'totalCost'=>$totalCost,'totalPurchase'=>$totalPurchase,'totalDelivered'=>$totalDelivered,'totalCancelled'=>$totalCancelled])->layout('layouts.base');
    }
}
