<?php

namespace App\Http\Livewire\Admin;

use App\Models\CustomOrder;
use Livewire\Component;

class AdminCustomOrderComponent extends Component
{
    public function render()
    {
        $customorders = CustomOrder::orderBy('created_at', 'DESC')->paginate(10);
        
        return view('livewire.admin.admin-custom-order-component',['customorders' => $customorders])->layout('layouts.base');
    }
}
