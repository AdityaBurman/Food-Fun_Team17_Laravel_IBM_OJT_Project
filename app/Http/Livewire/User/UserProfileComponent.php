<?php

namespace App\Http\Livewire\User;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Order;
use Exception;


class UserProfileComponent extends Component
{
    public function render()
    {
        
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile  = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        $orders = Order::OrderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get()->take(20);
        $totalCost = Order::where('status','!=','cancelled')->where('user_id',Auth::user()->id)->sum('total');
        $totalPurchase = Order::where('status','!=','cancelled')->where('user_id',Auth::user()->id)->count();
        $totalDelivered = Order::where('status','delivered')->where('user_id',Auth::user()->id)->count();
        $totalCancelled = Order::where('status','cancelled')->where('user_id',Auth::user()->id)->count();
        return view('livewire.user.user-dashboard-component',[
            'orders'=>$orders,
            'totalCost'=>$totalCost,
            'totalPurchase'=>$totalPurchase,
            'totalDelivered'=>$totalDelivered,
            'totalCancelled'=>$totalCancelled,
            'user'=>$user
            ])->layout('layouts.base');
    }
}
