@extends('admin.master')

@section('title' , 'Skills')
    
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    
  <div class="mb-3">
    
    <h4 class="fw-bold py-3 mb-4 d-inline">Skills</h4>
    <button type="button" class="btn-sm btn-primary mx-2" style="position: relative; top:-4px;" data-bs-toggle="modal" data-bs-target="#createModal">Add New</button>
    
    @livewire('admin.skills.skills-create')
    @livewire('admin.skills.skills-update')
    @livewire('admin.skills.skills-delete')
    @livewire('admin.skills.skills-show')
  
  </div>

    <div class="card mb-4">
    <div class="card-body">
      
      @livewire('admin.skills.skills-data')
    
    </div>
    </div>
    
</div>

    
@endsection
