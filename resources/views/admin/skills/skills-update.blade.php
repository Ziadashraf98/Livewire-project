<x-edit-modal title="Edit Skill">

  <div class="col mb-3">
    <label for="nameSmall" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="name" wire:model='name'/>
    @include('admin.error' , ['field'=>'name'])
  </div>
  
  <div class="col mb-0">
    <label class="form-label" for="emailSmall">Progress</label>
    <input type="number" class="form-control" placeholder="10" min="1" max="100" wire:model='progress'/>
    @include('admin.error' , ['field'=>'progress'])
  </div>

</x-edit-modal>