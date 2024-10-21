<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsUpdate extends Component
{
    public $skill , $name , $progress;
    
    protected $listeners = ['skillUpdate'=>'edit'];  // [Event('skillUpdate') => Listener('edit')];

    public function rules()
    {
        return 
        [
            'name'=>'required|string',
            'progress'=>'required|numeric',
        ];
    }

    public function edit($id) // Listener
    {
        $this->skill = Skill::find($id);
        
        $this->fill([
            'name'=>$this->skill->name, 
            'progress'=>$this->skill->progress
        ]);
        
        $this->resetValidation();
        
        // $this->name = $this->skill->name;
        // $this->progress = $this->skill->progress;
    }

    public function submit()
    {
        $validation = $this->validate();
        $this->skill->update($validation);
        $this->dispatch('editModalToggle'); 
        $this->dispatch('refreshData')->to(SkillsData::class); 
        session()->flash('message' , 'Skills Updated Successfully.');
    }
    
    public function render()
    {
        return view('admin.skills.skills-update');
    }
}
