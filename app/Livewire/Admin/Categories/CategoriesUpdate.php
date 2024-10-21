<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesUpdate extends Component
{
    public $category , $name;
    
    protected $listeners = ['categoryUpdate'=>'edit'];

    public function rules()
    {
        return 
        [
            'name'=>'required|string',
        ];
    }

    public function edit($id)
    {
        $this->category = Category::find($id);
        
        $this->fill([
            'name'=>$this->category->name, 
        ]);
        
        $this->resetValidation();
    }

    public function submit()
    {
        $validation = $this->validate();
        $this->category->update($validation);
        $this->dispatch('editModalToggle'); 
        $this->dispatch('refreshData')->to(CategoriesData::class); 
        session()->flash('message' , 'Categories Updated Successfully.');
    }
    
    public function render()
    {
        return view('admin.categories.categories-update');
    }
}
