@extends('admin.master')

@section('title' , 'Messages')
    
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    
  <div class="mb-3">
    
    <h4 class="fw-bold py-3 mb-4 d-inline">Messages</h4>
    
    @livewire('admin.messages.messages-delete')
    @livewire('admin.messages.messages-show')
  
  </div>

    <div class="card mb-4">
    <div class="card-body">
      
      @livewire('admin.messages.messages-data')
    
    </div>
    </div>
    
</div>

    
@endsection
