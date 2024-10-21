<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class CountersData extends Component
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
        $counters = Counter::where('name', 'like', '%'.$this->search.'%')->paginate(5);
        
        return view('admin.counters.counters-data' , compact('counters'));
    }
}
