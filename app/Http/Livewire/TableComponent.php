<?php

namespace App\Http\Livewire;
use App\Models\Table;
use Livewire\Component;

class TableComponent extends Component
{
    
    public $name;
    public $email;
    public $phone;
    public $table;
    public $guest;
    public $date;
    public $time;
    public $comment;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'table'=>'required',
            'guest'=> 'required',
            'date'=>'required',
            'time'=>'required',
            'comment'=>'required'
        

        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'table'=>'required',
            'guest'=>'required',
            'date'=>'required',
            'time'=>'required',
            'comment'=>'required'
        ]);

        $table = new Table();
        $table->name = $this->name;
        $table->email = $this->email;
        $table->phone = $this->phone;
        $table->table = $this->table;
        $table->guest = $this->guest;
        $table->date = $this->date;
        $table->time = $this->time;
        $table->comment = $this->comment;
        $table->save();
        session()->flash('message','Thanks, Your table has been booked successfully!');
        return redirect()->back();
    }

   
    public function render()
    {
        return view('livewire.table-component')->layout('layouts.base');
    }
}
