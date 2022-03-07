<?php

namespace App\Http\Livewire\Admin;
use App\Models\Table;
use Livewire\Component;
use Validator;

class AdminTableComponent extends Component
{
    public function render()
    {
        $tables = Table::paginate(10);
        return view('livewire.admin.admin-table-component',['tables'=>$tables])->layout('layouts.admin');
    }
}
