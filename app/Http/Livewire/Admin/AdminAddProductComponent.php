<?php

namespace App\Http\Livewire\Admin;
use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
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
    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
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
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'category_id'=>'required'

        ]);
    }
    public function addProduct()
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
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'category_id'=>'required'
    ]);
        $product = new Product();
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

       

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        
        $product->category_id =$this->category_id;
        $product->save();
        session()->flash('message','Food details has been added successfully!');
    }
    public function render()
    {
        
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.admin');
    }
}
