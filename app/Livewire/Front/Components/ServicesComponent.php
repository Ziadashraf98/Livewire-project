<?php

namespace App\Livewire\Front\Components;

use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    public $count = 6;
    
    public function render()
    {
        $services = Service::take($this->count)->get();
        return view('front.components.services-component' , compact('services'));
    }
}
