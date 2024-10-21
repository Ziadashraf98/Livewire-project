<div>
    <input type="search" class="form-control mb-3 w-25" placeholder="Search" wire:model.live='search'>
        
    <div class="table-responsive text-nowrap">
        @if(count($categories) > 0)
        <table class="table">
      <thead>
          <tr>
          <th width="35%">Name</th>
          <th>Actions</th>
        </tr>
      </thead>
    <tbody class="table-border-bottom-0">
        @foreach($categories as $category)
        <tr>
          <td>{{$category->name}}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                
                 <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('categoryUpdate' , {id:{{$category->id}}})" data-bs-toggle="modal" data-bs-target="#editModal" 
                  ><i class="bx bx-edit-alt me-1"></i>Edit</a>  
                
                  <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('categoryDelete' , {id:{{$category->id}}})"  data-bs-toggle="modal" data-bs-target="#deleteModal"
                  ><i class="bx bx-trash me-1"></i>Delete</a>
              
              </div>
            </div>
          </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $categories->links() }}
    
</div>
@else
<span class="text-danger">No results found</span>
@endif
  </div>
</div>