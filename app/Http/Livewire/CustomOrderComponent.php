<?php

namespace App\Http\Livewire;

use App\Mail\CustomOrderMail;
use App\Models\CustomOrder;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Parables\ArkeselSdk\BulkSms\ArkeselSms;



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

        $this->sendCustomOrderConfirmationMail($customorder);

        $this->sendsmsmessage($customorder);
        $this->sendsmsmessageceo($customorder);

        return redirect()->route('home');

        

        

        

        
        
        /* Sms::via('mnotify')
        ->to(['0241161065'])
        ->message('Hi, we just want to thank you for using our service.')
        ->send(); */



        
    }

    public function sendsmsmessage($customorder)
        {
            $response = ArkeselSms::make()
            ->message("Hello Wanies Customer, 
Thanks for making a custom order, WaniesBakery will get back to you shortly.

Enjoy")
            ->recipients($customorder->contact)
            /* ->recipients("233234567890,233234567890") */ // alternative
            ->sandbox(false)
            ->send();

        }

        public function sendsmsmessageceo($customorder)
        {
            $response = ArkeselSms::make()
            ->message("Hello Wanies, 
A custom order has just been made.Review to either approve or decline the order.

Best Regards.")
            ->recipients("0594867002")
            /* ->recipients("233234567890,233234567890") */ // alternative
            ->sandbox(false)
            ->send();

        }

   
        

    

    public function sendCustomOrderConfirmationMail($customorder)
    {
        Mail::to($customorder->email)->send(new CustomOrderMail($customorder));
    }
 

    public function render()
    {
        return view('livewire.custom-order-component')->layout('layouts.base');
    }
}
