<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersShow extends Component
{
    public $counter , $name , $count , $icon;
    
    protected $listeners = ['counterShow'=>'show'];
    
    public function show($id)
    {
        $this->counter = Counter::find($id);
        
        $this->fill([
            'name'=>$this->counter->name,
            'count'=>$this->counter->count,
            'icon'=>$this->counter->icon,
        ]);
    }
    
    public function render()
    {
        return view('admin.counters.counters-show');
    }
}
