<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribersDelete extends Component
{
    public $subscriber , $email;

    protected $listeners = ['subscriberDelete'=>'delete'];
    
    public function delete($id)
    {
        $this->subscriber = Subscriber::find($id);
        
        $this->fill(['email'=>$this->subscriber->email]);
        // $this->email = $this->subscriber->email;
    }
   
    public function submit()
    {
        $this->subscriber->delete();
        $this->dispatch('deleteModalToggle'); 
        $this->dispatch('refreshData')->to(SubscribersData::class); 
        session()->flash('message' , 'Subscribers Deleted Successfully.');
    }
    
    public function render()
    {
        return view('admin.subscribers.subscribers-delete');
    }
}
