<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsUpdate extends Component
{
    use WithFileUploads;
    
    public $project , $name , $description , $link , $category_id , $image;
    
    protected $listeners = ['projectUpdate'=>'edit'];

    public function rules()
    {
        return 
        [
            'name'=>'required|string',
            'description'=>'required|string',
            'link'=>'required|url',
            'category_id'=>'required|exists:categories,id',
            'image'=>'nullable|image',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'category',
        ];
    }

    public function edit($id)
    {
        $this->project = Project::find($id);
        
        $this->fill([
            'name'=>$this->project->name, 
            'description'=>$this->project->description, 
            'link'=>$this->project->link, 
            'category_id'=>$this->project->category_id, 
        ]);
        
        $this->resetValidation();
    }

    public function submit()
    {
        $validation = $this->validate($this->rules() , [] , $this->attributes());
        
        if($this->image)
        {
            unlink(public_path('storage').'/'.$this->project->image);
            $validation['image'] = $this->image->store('images/projects' , 'public');
            $this->project->update($validation);
        }
        
        // unset($validation['image']);
        $validation['image'] = $this->project->image;
        $this->project->update($validation);
        $this->reset(['image']);
        $this->dispatch('editModalToggle'); 
        $this->dispatch('refreshData')->to(ProjectsData::class); 
        session()->flash('message' , 'Projects Updated Successfully.');
    }
    
    public function render()
    {
        $categories = Category::all();
        return view('admin.projects.projects-update' , compact('categories'));
    }
}
