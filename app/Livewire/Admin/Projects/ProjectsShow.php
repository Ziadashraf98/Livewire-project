<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsShow extends Component
{
    public $project , $name , $description , $link , $category , $image;
    
    protected $listeners = ['projectShow'=>'show'];
    
    public function show($id)
    {
        $this->project = Project::find($id);
        
        $this->fill([
            'name'=>$this->project->name,
            'description'=>$this->project->description,
            'link'=>$this->project->link,
            'category'=>$this->project->category->name,
            'image'=>$this->project->image,
        ]);
    }
    
    public function render()
    {
        return view('admin.projects.projects-show');
    }
}
