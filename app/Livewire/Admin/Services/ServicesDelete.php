<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    public $service , $name;

    protected $listeners = ['serviceDelete'=>'delete'];
    
    public function delete($id)
    {
        $this->service = Service::find($id);
        
        $this->fill(['name'=>$this->service->name]);
    }
    
    public function submit()
    {
        $this->service->delete();
        $this->dispatch('deleteModalToggle'); 
        $this->dispatch('refreshData')->to(ServicesData::class); 
        session()->flash('message' , 'Services Deleted Successfully.');
    }
    
    public function render()
    {
        return view('admin.services.services-delete');
    }
}
