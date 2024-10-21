<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsCreate extends Component
{
    use WithFileUploads;
    
    public $name , $description , $link , $category_id , $image;
    
    public function rules()
    {
        return 
        [
            'name'=>'required|string',
            'description'=>'required|string',
            'link'=>'required|url',
            'category_id'=>'required|exists:categories,id',
            'image'=>'required|image',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'category',
        ];
    }
    
    public function submit()
    {
        $validation = $this->validate($this->rules() , [] , $this->attributes());
        $validation['image'] = $this->image->store('images/projects' , 'public');
        Project::create($validation);
        $this->reset(['name' , 'description' , 'link' , 'category_id' , 'image']);
        $this->dispatch('createModalToggle'); 
        $this->dispatch('refreshData')->to(ProjectsData::class); 
        session()->flash('message' , 'Projects Created Successfully.');
    }
    
    public function render()
    {
        $categories = Category::all();
        return view('admin.projects.projects-create' , compact('categories'));
    }
}
