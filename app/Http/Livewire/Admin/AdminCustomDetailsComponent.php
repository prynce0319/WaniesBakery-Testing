<?php

namespace App\Http\Livewire\Admin;

use App\Models\CustomOrder;
use Livewire\Component;

class AdminCustomDetailsComponent extends Component
{
    public $custom_id;

    public function mount($custom_id)
    {
        $this-> $custom_id = $custom_id;
    }

    public function render()
    {
        $custom_order = CustomOrder::find($this->custom_id);
        return view('livewire.admin.admin-custom-details-component',["custom_order" => $custom_order])->layout('layouts.base');
    }
}
