<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesData extends Component
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
        $services = Service::where('name', 'like', '%'.$this->search.'%')->paginate(6);
        
        return view('admin.services.services-data' , compact('services'));

    }
}
