@extends('admin.master')

@section('title' , 'Projects')
    
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    
  <div class="mb-3">
    
    <h4 class="fw-bold py-3 mb-4 d-inline">Projects</h4>
    <button type="button" class="btn-sm btn-primary mx-2" style="position: relative; top:-4px;" data-bs-toggle="modal" data-bs-target="#createModal">Add New</button>
    
    @livewire('admin.projects.projects-create')
    @livewire('admin.projects.projects-update')
    @livewire('admin.projects.projects-delete')
    @livewire('admin.projects.projects-show')
  
  </div>

    <div class="card mb-4">
    <div class="card-body">
      
      @livewire('admin.projects.projects-data')
    
    </div>
    </div>
    
</div>

    
@endsection
