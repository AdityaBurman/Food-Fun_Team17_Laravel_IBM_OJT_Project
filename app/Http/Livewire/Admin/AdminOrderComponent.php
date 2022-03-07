<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\DB;

class AdminOrderComponent extends Component
{
    public $searchTerm;
    public function updateOrderStatus($order_id,$status)
    {
        $order = Order::find($order_id);
        $order->status = $status;
        if($status == "delivered")
        {
            $order->delivered_date = DB::raw('CURRENT_DATE');
    
        }
        else if($status == "cancelled")
        {
            $order->cancelled_date = DB::raw('CURRENT_DATE');
        }
        $order->save();
        session()->flash('order_message','Order status has been updated successfullcy!');

    }
   
    public function render()
    {
        $search  = '%'.$this->searchTerm.'%';
        $orders =Order::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.admin-order-component',['orders'=>$orders])->layout('layouts.admin');
    }
}
