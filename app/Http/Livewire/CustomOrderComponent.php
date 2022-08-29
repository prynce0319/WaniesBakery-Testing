<?php

namespace App\Http\Livewire;

use App\Models\CustomOrder;
use Livewire\Component;

class CustomOrderComponent extends Component
{

    public $name;
    public $contact;
    public $email;
    public $size;
    public $layers;
    public $flavour;
    public $color1;
    public $color2;
    public $inscription;
    public $delivery_type;
    public $delivery_location;
    public $delivery_date;
    public $delivery_time;
    public $additional_info;

    public function sendOrder()
    {
        $customorder = new CustomOrder();
        $customorder->name = $this->name;
        $customorder->contact = $this->contact;
        $customorder->email = $this->email;
        $customorder->size = $this->size;
        $customorder->layers = $this->layers;
        $customorder->flavour = $this->flavour;
        $customorder->color1 = $this->color1;
        $customorder->color2 = $this->color2;
        $customorder->inscription = $this->inscription;
        $customorder->delivery_type = $this->delivery_type;
        $customorder->delivery_location = $this->delivery_location;
        $customorder->delivery_date = $this->delivery_date;
        $customorder->delivery_time = $this->delivery_time;
        $customorder->additional_info = $this->additional_info;
        $customorder->save();
        session()->flash('message', 'Custom Order Sent, Approval will be sent to you!');
    }

    public function render()
    {
        return view('livewire.custom-order-component')->layout('layouts.base');
    }
}
