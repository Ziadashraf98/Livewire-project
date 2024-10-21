<?php

namespace App\Livewire\Front\Components;

use App\Models\Skill;
use Livewire\Component;

class SkillsComponent extends Component
{
    public function render()
    {
        $skills = Skill::all();
        return view('front.components.skills-component' , compact('skills'));
    }
}
