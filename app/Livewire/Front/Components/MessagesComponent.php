<?php

namespace App\Livewire\Front\Components;

use App\Models\Message;
use Livewire\Component;

class MessagesComponent extends Component
{
    public $name , $email , $subject , $message;
    
    public function rules()
    {
        return 
        [
            'name'=>'required|string',
            'email'=>'required|unique:subscribers,email|email',
            'subject'=>'required|string',
            'message'=>'required|string',
        ];
    }
    
    public function submit()
    {
        Message::create($this->validate());
        $this->reset(['name' , 'email' , 'subject' , 'message']);
        session()->flash('message' , 'Message Sent Successfully.');
    }
    
    public function render()
    {
        return view('front.components.messages-component');
    }
}
