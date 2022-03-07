<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteProduct($id)
    {
        $product = product::find($id);
        $product->delete();
        session()->flash('message','Food Details has been deleted successfully!');
    }
    public function render()
    {
        $search  = '%'.$this->searchTerm.'%';
        $products = product::where('name','LIKE',$search)
                    ->orWhere('stock_status','LIKE,$search')
                    ->orWhere('regular_price','LIKE,$search')
                    ->orWhere('sale_price','LIKE,$search')
                    ->orderBy('id','DESC')->paginate(20);
         
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.admin');
    }
}