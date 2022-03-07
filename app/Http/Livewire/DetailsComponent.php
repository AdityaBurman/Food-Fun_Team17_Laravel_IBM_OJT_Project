<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use App\Models\Contact;
use Cart;
class DetailsComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $comment;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'comment'=>'required'

        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'comment'=>'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->comment = $this->comment;
        $contact->save();
        session()->flash('message','Thanks, Your message has beeen sent successfully!');
    }
    public $slug;
    public $qty;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->qty= 1;
    }
    public function increaseQuantity()
    {
        $this->qty++;
        
    }
    public function decreaseQuantity()
    {
        if($this->qty> 1)
       
        {
            $this->qty--;
           
        }
    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\Product');
       session()->flash('success_message','Item added in Cart');
       $this->emitTo('cart-count-component','refreshComponent');
       return;
       return redirect()->route('product.cart');
    }
   
    public function render()
   
    {
        
        $product= Product::where('slug',$this->slug)->first();
        return view('livewire.details-component',['product'=>$product])->layout('layouts.base');
    }
}
