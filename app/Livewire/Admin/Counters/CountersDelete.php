<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    public $counter , $name;

    protected $listeners = ['counterDelete'=>'delete'];
    
    public function delete($id)
    {
        $this->counter = Counter::find($id);
        
        $this->fill(['name'=>$this->counter->name]);
    }
    
    public function submit()
    {
        $this->counter->delete();
        $this->dispatch('deleteModalToggle'); 
        $this->dispatch('refreshData')->to(CountersData::class); 
        session()->flash('message' , 'Counters Deleted Successfully.');
    }
    
    public function render()
    {
        return view('admin.counters.counters-delete');
    }
}
