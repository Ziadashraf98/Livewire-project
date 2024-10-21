<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsDelete extends Component
{
    public $project , $name;

    protected $listeners = ['projectDelete'=>'delete'];
    
    public function delete($id)
    {
        $this->project = Project::find($id);
        
        $this->fill(['name'=>$this->project->name]);
    }
    
    public function submit()
    {
        $this->project->delete();
        unlink(public_path('storage').'/'.$this->project->image);
        $this->dispatch('deleteModalToggle'); 
        $this->dispatch('refreshData')->to(ProjectsData::class); 
        session()->flash('message' , 'Projects Deleted Successfully.');
    }
    
    public function render()
    {
        return view('admin.projects.projects-delete');
    }
}
