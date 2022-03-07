<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\WithPagination;
use Livewire\Component;
use Cart;
use App\Models\Category;
use illuminate\Support\Facades\Auth;

class MenuComponent extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
       Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
       $this->emitTo('cart-count-component','refreshComponent');
       return;
       session()->flash('success_message','Item added in Cart');
       return redirect('/menu')->with('status', 'Item added in your food cart');

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
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }

        $categories = Category::all();
        $products = Product::paginate(20);
        return view('livewire.menu-component',['products'=>$products,'categories'=>$categories])->layout('layouts.base');
    }
    
}
