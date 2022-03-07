<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;
    
    public function generateslug()
     {
         $this->slug = str::slug($this->name);
     }   
     public function updated($fields){
         $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required|unique:categories'
         ]);
     }    
     public function storeCategory()
    { 
                $this->validate([
                    'name'=>'required',
                    'slug'=>'required|unique:categories'
                ]);
                $category = new Category();
                $category->name = $this->name;
                $category->slug = $this->slug;
                $category->save();
                session()->flash('message','Food Category has been created successfully!');
    }  
  

    public function render()
    {
        
        return view('livewire.admin.admin-add-category-component')->layout('layouts.admin');
    }
}
