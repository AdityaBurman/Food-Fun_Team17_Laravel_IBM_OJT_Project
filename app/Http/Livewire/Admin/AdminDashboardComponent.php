<?php

namespace App\Http\Livewire\Admin;
use App\Models\Table;
use App\Models\Contact;
use App\Models\Order;
use Carbon\Carbon;

use Livewire\Component;
use Exception;
use Illuminate\Support\Facades\DB;
use Validator;

class AdminDashboardComponent extends Component
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
        session()->flash('order_message','Order status has been updated successfully!');

    }
    public function render()
    {
        $search  = '%'.$this->searchTerm.'%';
        $tables = Table::paginate(10);
        $contacts = Contact::paginate(12);
        $orders = Order::orderBy('created_at','DESC')->get()->take(10);
        $totalSales = Order::where('status','delivered')->count();
        $totalRevenue = Order::where('status','delivered')->sum('total');
        $todaySales  = Order::where ('status','delivered')->whereDate('created_at',Carbon::today())->count();
        $todayRevenue = Order::where('status','delivered')->whereDate('created_at',Carbon::today())->sum('total');
        return view('livewire.admin.admin-dashboard-component',[
            'orders'=>$orders,
            'totalSales'=>$totalSales,
            'totalRevenue'=>$totalRevenue,
            'todaySales'=>$todaySales,
            'todayRevenue'=>$todayRevenue,
            'tables'=>$tables,
            'contacts'=>$contacts
            ])->layout('layouts.admin');
    }
}
