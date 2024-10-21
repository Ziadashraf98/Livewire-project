<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersCreate extends Component
{
    public $name , $count , $icon;
    
    public function rules()
    {
        return 
        [
            'name'=>'required|string',
            'count'=>'required|numeric',
            'icon'=>'required|string',
        ];
    }
    
    public function submit()
    {
        $validation = $this->validate();
        Counter::create($validation);
        $this->reset(['name' , 'count' , 'icon']);
        $this->dispatch('createModalToggle'); 
        $this->dispatch('refreshData')->to(CountersData::class); 
        session()->flash('message' , 'Counters Created Successfully.');
    }
    
    public function render()
    {
        return view('admin.counters.counters-create');
    }
}
