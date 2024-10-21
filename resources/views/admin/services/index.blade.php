@extends('admin.master')

@section('css')

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
@endsection

@section('title' , 'Services')
    
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    
  <div class="mb-3">
    
    <h4 class="fw-bold py-3 mb-4 d-inline">Services</h4>
    <button type="button" class="btn-sm btn-primary mx-2" style="position: relative; top:-4px;" data-bs-toggle="modal" data-bs-target="#createModal">Add New</button>
    
    @livewire('admin.services.services-create')
    @livewire('admin.services.services-update')
    @livewire('admin.services.services-delete')
  
  </div>

    <div class="card mb-4">
    <div class="card-body">
      
      @livewire('admin.services.services-data')
    
    </div>
    </div>
    
</div>

    
@endsection
