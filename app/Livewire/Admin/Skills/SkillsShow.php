<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{
    public $skill , $name , $progress;
    
    protected $listeners = ['skillShow'=>'show'];
    
    public function show($id)
    {
        $this->skill = Skill::find($id);
        
        $this->fill([
            'name'=>$this->skill->name,
            'progress'=>$this->skill->progress,
        ]);
    }
    
    public function render()
    {
        return view('admin.skills.skills-show');
    }
}
