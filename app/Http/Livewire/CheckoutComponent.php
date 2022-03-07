<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;
use Cart;
use App\Models\Shipping;
use Exception;
use App\Models\OrderItem;
use App\Models\Transaction;

class CheckoutComponent extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $zipcode;

    public $paymentmode;
    public $thankyou;

    public function updated($fields)
{
    $this->validateOnly($fields,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'mobile'=>'required|numeric',
            'line1'=>'required',
            'city'=>'required',
            'province'=>'required',
            'zipcode'=>'required',
            'paymentmode'=>'required',

    ]); 
}
    public function placeOrder()
    {
        $this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'mobile'=>'required|numeric',
            'line1'=>'required',
            'city'=>'required',
            'province'=>'required',
            'zipcode'=>'required',
            'paymentmode'=>'required',


        ]);
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->firstname=$this->firstname;
        $order->lastname=$this->lastname;
        $order->email=$this->email;
        $order->mobile=$this->mobile;
        $order->line1=$this->line1;
        $order->line2=$this->line2;
        $order->city=$this->city;
        $order->province=$this->province;
        $order->zipcode=$this->zipcode;
        $order->status= 'ordered';
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


         if($this->paymentmode == 'cod')
         {
             $transaction = new Transaction();
             $transaction->user_id =Auth::user()->id;
             $transaction->order_id = $order->id;
             $transaction->mode = 'cod';
             $transaction->status = 'pending';
             $transaction->save();

         }

         $this->thankyou = 1;
         Cart::instance('cart')->destroy();
         session()->forget('checkout');

         $this->sendOrderConfirmationMail($order);
    }

    public function sendOrderConfirmationMail($order)
    {
        Mail::to($order->email)->send(new OrderMail($order));
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