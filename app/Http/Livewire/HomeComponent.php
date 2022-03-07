<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Contact;
use illuminate\Support\Facades\Auth;
use Cart;

use App\Models\Category;


class HomeComponent extends Component
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
        return redirect()->back();
    }

   

 

    public function addToWishlist($product_id,$product_name,$product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');

    }
    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content()as $witem)
        {
            if($witem->id == $product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                return;
            }

        }
    }

    use WithPagination;
    public function render()
    {
        if(Auth::check())
        {
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->restore(Auth::user()->email);
        }
        $products = Product::paginate(10);
        $categories = Category::all();
        return view('livewire.home-component',['products'=>$products,'categories'=>$categories])->layout('layouts.base');
    }
    public function store($product_id,$product_name,$product_price)
    {
        
       Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
       $this->emitTo('cart-count-component','refreshComponent');
       return;
       session()->flash('success_message','Food Item added in Cart');
       
       return redirect('/')->with('status', 'Item added in your food cart');
      
    }
}


