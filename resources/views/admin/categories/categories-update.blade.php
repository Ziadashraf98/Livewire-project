<x-edit-modal title="Edit Category">

    <div class="col mb-3">
      <label for="nameSmall" class="form-label">Name</label>
      <input type="text" class="form-control" placeholder="name" wire:model='name'/>
      @include('admin.error' , ['field'=>'name'])
    </div>
  
  </x-edit-modal>