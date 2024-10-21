<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class MessagesShow extends Component
{
    public $name , $email , $subject , $letter , $status;
    
    protected $listeners = ['messageShow'=>'show'];

    public function show($id)
    {
        $message = Message::find($id);
        
        $message->update(['status'=>'1']);
        
        $this->dispatch('refreshData')->to(MessagesData::class); 
        
        $this->fill([
            'name'=>$message->name,
            'email'=>$message->email,
            'subject'=>$message->subject,
            'letter'=>$message->message,
        ]);
    }

    public function render()
    {
        return view('admin.messages.messages-show');
    }
}
