<?php

namespace App\Livewire\Front\Components;

use App\Models\Counter;
use Livewire\Component;

class CountersComponent extends Component
{
    public function render()
    {
        $counters = Counter::all();
        return view('front.components.counters-component' , compact('counters'));
    }
}
