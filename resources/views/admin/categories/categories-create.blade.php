<x-create-modal title="Add New Category">

    <div class="col mb-3">
      <label for="nameSmall" class="form-label">Name</label>
      <input type="text" class="form-control" placeholder="name" wire:model='name' id="input"/>
      @include('admin.error' , ['field'=>'name'])
    </div>
    
  </x-create-modal>