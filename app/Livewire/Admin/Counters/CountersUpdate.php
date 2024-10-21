<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersUpdate extends Component
{
    public $counter , $name , $count , $icon;
    
    protected $listeners = ['counterUpdate'=>'edit'];

    public function rules()
    {
        return 
        [
            'name'=>'required|string',
            'count'=>'required|numeric',
            'icon'=>'required|string',
        ];
    }

    public function edit($id)
    {
        $this->counter = Counter::find($id);
        
        $this->fill([
            'name'=>$this->counter->name, 
            'count'=>$this->counter->count,
            'icon'=>$this->counter->icon,
        ]);
        
        $this->resetValidation();
    }

    public function submit()
    {
        $validation = $this->validate();
        $this->counter->update($validation);
        $this->dispatch('editModalToggle'); 
        $this->dispatch('refreshData')->to(CountersData::class); 
        session()->flash('message' , 'Counters Updated Successfully.');
    }
    
    public function render()
    {
        return view('admin.counters.counters-update');
    }
}
