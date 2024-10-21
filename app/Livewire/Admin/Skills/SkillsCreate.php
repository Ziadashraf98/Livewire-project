<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsCreate extends Component
{
    public $name , $progress;
    
    public function rules()
    {
        return 
        [
            'name'=>'required|string',
            'progress'=>'required|numeric',
        ];
    }
    
    public function submit()
    {
        $validation = $this->validate();
        Skill::create($validation);
        $this->reset(['name' , 'progress']);
        $this->dispatch('createModalToggle'); 
        $this->dispatch('refreshData')->to(SkillsData::class); 
        session()->flash('message' , 'Skills Created Successfully.');
    }
    
    public function render()
    {
        return view('admin.skills.skills-create');
    }
}
