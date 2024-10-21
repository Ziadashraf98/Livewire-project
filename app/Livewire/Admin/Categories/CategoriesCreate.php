<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesCreate extends Component
{
    public $name;
    
    public function rules()
    {
        return 
        [
            'name'=>'required|string',
        ];
    }
    
    public function submit()
    {
        $validation = $this->validate();
        Category::create($validation);
        $this->reset(['name']);
        $this->dispatch('createModalToggle'); 
        $this->dispatch('refreshData')->to(CategoriesData::class); 
        session()->flash('message' , 'Categories Created Successfully.');
    }
    
    public function render()
    {
        return view('admin.categories.categories-create');
    }
}
