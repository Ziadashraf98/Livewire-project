<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesDelete extends Component
{
    public $category , $name;

    protected $listeners = ['categoryDelete'=>'delete'];
    
    public function delete($id)
    {
        $this->category = Category::find($id);
        
        $this->fill(['name'=>$this->category->name]);
    }
    
    public function submit()
    {
        $this->category->delete();
        $this->dispatch('deleteModalToggle'); 
        $this->dispatch('refreshData')->to(CategoriesData::class); 
        session()->flash('message' , 'Categories Deleted Successfully.');
    }
    
    public function render()
    {
        return view('admin.categories.categories-delete');
    }
}
