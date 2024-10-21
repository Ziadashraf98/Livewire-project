@extends('admin.master')

@section('css')

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
@endsection

@section('title' , 'Counters')
    
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    
  <div class="mb-3">
    
    <h4 class="fw-bold py-3 mb-4 d-inline">Counters</h4>
    <button type="button" class="btn-sm btn-primary mx-2" style="position: relative; top:-4px;" data-bs-toggle="modal" data-bs-target="#createModal">Add New</button>
    
    @livewire('admin.counters.counters-create')
    @livewire('admin.counters.counters-update')
    @livewire('admin.counters.counters-delete')
    @livewire('admin.counters.counters-show')
  
  </div>

    <div class="card mb-4">
    <div class="card-body">
      
      @livewire('admin.counters.counters-data')
    
    </div>
    </div>
    
</div>

    
@endsection
