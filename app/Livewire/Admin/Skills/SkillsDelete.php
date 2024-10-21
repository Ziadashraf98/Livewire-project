<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{
    public $skill , $name;

    protected $listeners = ['skillDelete'=>'delete'];
    
    public function delete($id)
    {
        $this->skill = Skill::find($id);
        
        $this->fill(['name'=>$this->skill->name]);
    }
   
    public function submit()
    {
        $this->skill->delete();
        $this->dispatch('deleteModalToggle'); 
        $this->dispatch('refreshData')->to(SkillsData::class); 
        session()->flash('message' , 'Skills Deleted Successfully.');
    }
    
    public function render()
    {
        return view('admin.skills.skills-delete');
    }
}
