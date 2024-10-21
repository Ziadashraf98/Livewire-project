<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{
    public $service , $name , $description , $icon;
    
    protected $listeners = ['serviceUpdate'=>'edit'];

    public function rules()
    {
        return 
        [
            'name'=>'required|string',
            'description'=>'required|string',
            'icon'=>'required|string',
        ];
    }

    public function edit($id)
    {
        $this->service = Service::find($id);
        
        $this->fill([
            'name'=>$this->service->name, 
            'description'=>$this->service->description,
            'icon'=>$this->service->icon,
        ]);
        
        $this->resetValidation();
    }

    public function submit()
    {
        $validation = $this->validate();
        $this->service->update($validation);
        $this->dispatch('editModalToggle'); 
        $this->dispatch('refreshData')->to(ServicesData::class); 
        session()->flash('message' , 'Services Updated Successfully.');
    }
    
    public function render()
    {
        return view('admin.services.services-update');
    }
}
