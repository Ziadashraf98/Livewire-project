<div>
    <input type="search" class="form-control mb-3 w-25" placeholder="Search" wire:model.live='search'>
        
    <div class="table-responsive text-nowrap">
        @if(count($counters) > 0)
        <table class="table">
      <thead>
          <tr>
          <th width="35%">Name</th>
          <th width="35%">Count</th>
          <th width="35%">Icon</th>
          <th>Actions</th>
        </tr>
      </thead>
    <tbody class="table-border-bottom-0">
        @foreach($counters as $counter)
        <tr>
          <td>{{$counter->name}}</td>
          <td>{{$counter->count}}</td>
          <td><i class="{{$counter->icon}} fa-2x text-secondary mb-3"></i></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                
                 <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('counterUpdate' , {id:{{$counter->id}}})" data-bs-toggle="modal" data-bs-target="#editModal" 
                  ><i class="bx bx-edit-alt me-1"></i>Edit</a>  
                
                  <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('counterDelete' , {id:{{$counter->id}}})"  data-bs-toggle="modal" data-bs-target="#deleteModal"
                  ><i class="bx bx-trash me-1"></i>Delete</a>
                  
                  <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('counterShow' , {id:{{$counter->id}}})"  data-bs-toggle="modal" data-bs-target="#showModal"
                  ><i class="bx bx-show-alt me-1"></i>Show</a> 
                         
              
              </div>
            </div>
          </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $counters->links() }}
    
</div>
@else
<span class="text-danger">No results found</span>
@endif
  </div>
</div>