<x-create-modal title="Add New Counter">

    <div class="col mb-3">
      <label for="nameSmall" class="form-label">Name</label>
      <input type="text" class="form-control" placeholder="name" wire:model='name' id="input"/>
      @include('admin.error' , ['field'=>'name'])
    </div>
    
    <div class="col mb-3">
      <label class="form-label" for="emailSmall">Count</label>
      <input type="number" class="form-control" placeholder="10" min="1" wire:model='count'/>
      @include('admin.error' , ['field'=>'count'])
    </div>
    
    <div class="col mb-0">
      <label class="form-label" for="emailSmall">Icon</label>
      <input type="text" class="form-control" placeholder="icon" wire:model='icon'/>
      @include('admin.error' , ['field'=>'icon'])
    </div><br>

  </x-create-modal>