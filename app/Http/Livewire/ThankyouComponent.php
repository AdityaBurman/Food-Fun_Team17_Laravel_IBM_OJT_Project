<?php

namespace App\Http\Livewire;
use App\Models\Order;
use Livewire\Component;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class ThankyouComponent extends Component
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
        return view('livewire.thankyou-component',['user'=>$user])->layout('layouts.base');
    }
}
