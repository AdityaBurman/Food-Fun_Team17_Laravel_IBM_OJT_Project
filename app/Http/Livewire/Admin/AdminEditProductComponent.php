<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sales_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;
    public $newimage;
    public $product_id;

    public function mount($product_slug)
    {
            $product = Product::where('slug',$product_slug)->first();
            $this-> name=$product->name;
            $this-> slug=$product->slug;
            $this-> short_description=$product->short_description;
            $this-> description=$product->description;
            $this-> regular_price=$product->regular_price;
            $this-> sales_price=$product->sales_price;
            $this-> SKU=$product->SKU;            
            $this-> stock_status=$product->stock_status;
            $this-> featured=$product->featured;
            $this-> quantity=$product-> quantity;
            $this-> image=$product->image;
            $this-> category_id=$product->category_id;
            $this-> newimage=$product->newimage;
            $this-> product_id=$product->id;
       
    }
    public function generateslug()
    {
        $this->slug = str::slug($this->name,'-');
        

    } 
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' =>'required',
            'slug' =>'required|unique:products',
            'short_description' =>'required',
            'description' =>'required',
            'regular_price' =>'required|numeric',
            'sales_price' =>'numeric',
            'SKU' =>'required',
            'stock_status' =>'required',
            'quantity' =>'required|numeric',
            'newimage' => 'required|image|mimes:jpg,jpeg,png',
            'category_id'=>'required'

        ]);
    }
    public function updateProduct()
    { 
        $this->validate([
            'name' =>'required',
            'slug' =>'required|unique:products',
            'short_description' =>'required',
            'description' =>'required',
            'regular_price' =>'required|numeric',
            'sales_price' =>'numeric',
            'SKU' =>'required',
            'stock_status' =>'required',
            'quantity' =>'required|numeric',
            'newimage' => 'required|image|mimes:jpg,jpeg,png',
   
            'category_id'=>'required'
    ]);
        $product = product::find($this->product_id);
        $product->name=$this->name;
        $product->slug=$this->slug;
        $product->short_description=$this->short_description;
        $product->description=$this->description;
        $product->regular_price=$this->regular_price;
        $product->sale_price=$this->sales_price;
        $product->SKU=$this->SKU;
        $product->stock_status=$this->stock_status;
        $product->featured=$this->featured;
        $product->quantity=$this->quantity;
        if($this->newimage)
        {

            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;
        }
        $product->category_id =$this->category_id;
        $product->save();
        session()->flash('message','Food details has been updated successfully!');
    }  
    public function render()
    {
        $categories = Category::all();
   
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layouts.admin');
    }
}