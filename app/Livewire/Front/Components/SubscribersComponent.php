<?php

namespace App\Livewire\Front\Components;

use App\Livewire\Admin\Subscribers\SubscribersData;
use App\Models\Subscriber;
use Livewire\Component;

class SubscribersComponent extends Component
{
    public $email;
    
    public function rules()
    {
        return 
        [
            'email'=>'required|unique:subscribers,email|email',
        ];
    }
    
    public function submit()
    {
        Subscriber::create($this->validate());
        $this->reset(['email']);
        session()->flash('message' , 'Subscribed Successfully.');
    }
    
    public function render()
    {
        return view('front.components.subscribers-component');
    }
}
