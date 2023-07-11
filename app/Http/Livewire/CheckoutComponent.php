<?php

namespace App\Http\Livewire;

use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Parables\ArkeselSdk\BulkSms\ArkeselSms;



class CheckoutComponent extends Component
{
    public $deliver_to_different;

    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $line1;
    public $line2;
    public $location;
    public $city;
    public $region;

    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_mobile;
    public $s_line1;
    public $s_line2;
    public $s_location;
    public $s_city;
    public $s_region;

    public $paymentmode;
    public $thankyou;


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'line1' => 'required',
            'line2' => 'required',
            'location' => 'required',
            'city' => 'required',
            'region' => 'required',
            'paymentmode' => 'required'
        ]);

        if($this->deliver_to_different)
        {
            $this->validateOnly($fields,[
                's_firstname' => 'required',
                's_lastname' => 'required',
                's_email' => 'required|email',
                's_mobile' => 'required|numeric',
                's_line1' => 'required',
                's_location' => 'required',
                's_city' => 'required',
                's_region' => 'required'

            ]);
        }
    }

    public function placeOrder()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'min_digits:10|required|numeric',
            'line1' => 'required',
            'location' => 'required',
            'city' => 'required',
            'region' => 'required',
            'paymentmode' => 'required'
        ]);


        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->firstname= $this->firstname;
        $order->lastname = $this->lastname;
        $order->email = $this->email;
        $order->mobile = $this->mobile;
        $order->line1 = $this->line1;
        $order->line2 = $this->line2;
        $order->location = $this->location;
        $order->city = $this->city;
        $order->region = $this->region;
        $order->status = 'Ordered';
        $order->is_delivery_different = $this->deliver_to_different ? 1:0;
        $order->save();


        foreach(Cart::instance('cart')->content() as $item)
        {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }

        if($this->deliver_to_different)
        {
            $this->validate([
                's_firstname' => 'required',
                's_lastname' => 'required',
                's_email' => 'required|email',
                's_mobile' => 'required|numeric|min:10',
                's_line1' => 'required',
                's_location' => 'required',
                's_city' => 'required',
                's_region' => 'required'
            ]);

            $shipping = new Shipping;
            $shipping->order_id = $order->id;
            $shipping->firstname= $this->s_firstname;
            $shipping->lastname = $this->s_lastname;
            $shipping->email = $this->s_email;
            $shipping->mobile = $this->s_mobile;
            $shipping->line1 = $this->s_line1;
            $shipping->line2 = $this->s_line2;
            $shipping->location = $this->s_location;
            $shipping->city = $this->s_city;
            $shipping->region = $this->s_region;
            $shipping->save();
        }

        if($this->paymentmode == 'CashOnDelivery')
        {
            $transaction = new Transaction();
            $transaction -> user_id = Auth::user()->id;
            $transaction -> order_id = $order->id;
            $transaction -> mode = 'CashOnDelivery';
            $transaction -> status = 'Pending';
            $transaction -> save();
        }

        elseif ($this->paymentmode == 'momo')
        {
            $transaction = new Transaction();
            $transaction -> user_id = Auth::user()->id;
            $transaction -> order_id = $order->id;
            $transaction -> mode = 'MobileMoney';
            $transaction -> status = 'Pending';
            $transaction -> save();
        }

        $this->thankyou = 1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');


        $this->sendOrderConfirmationMail($order);
        $this->sendsmsmessage($order);
        $this->sendsmsmessageceo1($order);

    }

    public function sendsmsmessage($order)
        {
            $response = ArkeselSms::make()
            ->message("Greetings,
Thanks for making an order from wanies bakery, WaniesBakery will get back to you shortly.

Best Regards")
            ->recipients($order->mobile)
            /* ->recipients("233234567890,233234567890") */ // alternative
            ->sandbox(false)
            ->send();

        }

        public function sendsmsmessageceo1($order)
        {
            $response = ArkeselSms::make()
            ->message("Greetings Wanies,
An order has just been made.
Go online to view the order.

Best Regards.")
            ->recipients("0241161065")
            /* ->recipients("233234567890,233234567890") */ // alternative
            ->sandbox(false)
            ->send();

        }



    public function sendOrderConfirmationMail($order)
    {
        try {
        Mail::to($order->email)->send(new OrderMail($order));
    } catch (\Exception $exception ) {
        return view('livewire.home-component');
    }
    }


    public function verifyForCheckout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        else if($this->thankyou)
        {
            return redirect()->route('thankyou');
        }
        else if(!session()->get('checkout'))
        {
            return redirect()->route('product.cart');
        }
    }

    public function render()
    {
        $this->verifyForCheckout();
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
