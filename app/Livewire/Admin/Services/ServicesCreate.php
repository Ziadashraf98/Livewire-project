<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesCreate extends Component
{
    public $name , $description , $icon;
    
    public function rules()
    {
        return 
        [
            'name'=>'required|string',
            'description'=>'required|string',
            'icon'=>'required|string',
        ];
    }
    
    public function submit()
    {
        $validation = $this->validate();
        Service::create($validation);
        $this->reset(['name' , 'description' , 'icon']);
        $this->dispatch('createModalToggle'); 
        $this->dispatch('refreshData')->to(ServicesData::class); 
        session()->flash('message' , 'Services Created Successfully.');
    }
    
    public function render()
    {
        return view('admin.services.services-create');
    }
}
