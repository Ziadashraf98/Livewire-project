<x-edit-modal title="Edit Counter">

    <div class="col mb-3">
      <label for="nameSmall" class="form-label">Name</label>
      <input type="text" class="form-control" placeholder="name" wire:model='name'/>
      @include('admin.error' , ['field'=>'name'])
    </div>
    
    <div class="col mb-3">
      <label class="form-label" for="emailSmall">Description</label>
      <textarea type="text" class="form-control" placeholder="description" wire:model='description'></textarea>
      @include('admin.error' , ['field'=>'description'])
    </div>

      <div class="col mb-0">
        <label class="form-label" for="emailSmall">Icon</label>
        <input type="text" class="form-control" placeholder="icon" wire:model='icon'/>
        @include('admin.error' , ['field'=>'icon'])
      </div>
  
  </x-edit-modal>