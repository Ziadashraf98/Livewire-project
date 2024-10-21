<x-edit-modal title="Edit Project">

    <div class="col mb-3">
      <label for="nameSmall" class="form-label">Name</label>
      <input type="text" class="form-control" placeholder="name" wire:model='name'/>
      @include('admin.error' , ['field'=>'name'])
    </div>
    
    <div class="col mb-3">
      <label class="form-label" for="emailSmall">Description</label>
      <textarea type="number" class="form-control" placeholder="description" wire:model='description'></textarea>
      @include('admin.error' , ['field'=>'description'])
    </div>

    <div class="col mb-3">
        <label for="nameSmall" class="form-label">Link</label>
        <input type="url" class="form-control" placeholder="link" wire:model='link' id="input"/>
        @include('admin.error' , ['field'=>'link'])
    </div>
    
    <div class="col mb-3">
        <label for="exampleFormControlSelect1" class="form-label">Category</label>
        <select class="form-select" id="exampleFormControlSelect1" wire:model='category_id' aria-label="Default select example">
            <option selected value="{{null}}">select category</option>
            @foreach ($categories as $category)
            {{-- <option value="{{$category->id}}" {{ $category->id == $category_id ? 'selected' : ''}}>{{$category->name}}</option> --}}
            <option value="{{$category->id}}" @selected($category->id == $category_id)>{{$category->name}}</option>
            @endforeach
        </select>
        @include('admin.error' , ['field'=>'category_id'])
    </div>

    <div class="col mb-0">
        <label class="form-label" for="emailSmall">Image</label>
        <input type="file" class="form-control" wire:model='image'/>
        @include('admin.error' , ['field'=>'image'])
      </div><br>
  
      @if ($image) Photo Preview: <img style="width: 40%" src="{{ $image->temporaryUrl() }}"> @endif
      <div class="spinner-border" wire:loading wire:target="image" role="status"></div>

  
  </x-edit-modal>