<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{
    public $message , $name;

    protected $listeners = ['messageDelete'=>'delete'];
    
    public function delete($id)
    {
        $this->message = Message::find($id);
        
        $this->fill(['name'=>$this->message->name]);
    }
    
    public function submit()
    {
        $this->message->delete();
        $this->dispatch('deleteModalToggle'); 
        $this->dispatch('refreshData')->to(MessagesData::class); 
        session()->flash('message' , 'Messages Deleted Successfully.');
    }
    
    public function render()
    {
        return view('admin.messages.messages-delete');
    }
}
