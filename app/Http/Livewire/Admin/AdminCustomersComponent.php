<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Parables\ArkeselSdk\BulkSms\ArkeselSms;


class AdminCustomersComponent extends Component
{
    public $send_to_all = false;
    public $order_id;
    public $firstname;
    public $lastname;

    public $mobile;

    public $message;
    public function mount($order_id)
    {
        $order = Order::findOrFail($this->order_id);
        $this->firstname = $order->firstname;
        $this->lastname = $order->lastname;
        $this->mobile = $order->mobile;
    }

    public function sendsmsmessage()
{

        if ($this->send_to_all) {
            $contacts = Order::all();
            foreach ($contacts as $contact) {
                $response = ArkeselSms::make()
                    ->message($this->message)
                    ->recipients([$contact->mobile])
                    ->sandbox(false)
                    ->send();

            }
            session()->flash('message', 'Message sent successfully to all contacts!');
        } else {
            $response = ArkeselSms::make()
                ->message($this->message)
                ->recipients([$this->mobile])
                ->sandbox(false)
                ->send();
            }
            session()->flash('message', 'Message sent successfully!');
        }




   /*  public function bulksmsmessage()
{
    $contacts = Order::all();
    foreach ($contacts as $contact) {
        $response = ArkeselSms::make()
            ->message($this->message)
            ->recipients([$contact->mobile])
            ->sandbox(false)
            ->send();
    }
    session()->flash('message', 'Message sent successfully to all contacts!');
} */


    public function render()
    {
        $order = Order::findOrFail($this->order_id);
        return view('livewire.admin.admin-customers-component' ,compact('order') )->layout('layouts.base');
    }
}
