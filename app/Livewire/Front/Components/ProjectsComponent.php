<?php

namespace App\Livewire\Front\Components;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class ProjectsComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        $projects = Project::all();
        return view('front.components.projects-component' , compact('categories' , 'projects'));
    }
}
