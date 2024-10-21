<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesData extends Component
{
    use WithPagination;

    public $search;
    protected $queryString = ['search'=>['except'=>'']];
    protected $listeners = ['refreshData'=>'$refresh'];
        

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $categories = Category::where('name', 'like', '%'.$this->search.'%')->paginate(5);
        
        return view('admin.categories.categories-data' , compact('categories'));
    }
}
