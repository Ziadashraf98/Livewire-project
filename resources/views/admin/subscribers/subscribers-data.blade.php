<div>
    
    <input type="search" class="form-control mb-3 w-25" placeholder="Search" wire:model.live='search'>
        
    <div class="table-responsive text-nowrap">
        @if(count($subscribers) > 0)
        <table class="table">
      <thead>
          <tr>
          <th width="90%">Email</th>
          {{-- <th width="45%">Progress</th> --}}
          <th>Actions</th>
        </tr>
      </thead>
    <tbody class="table-border-bottom-0">
        @foreach($subscribers as $subscriber)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{$subscriber->email}}</strong></td>
          {{-- <td>{{$skill->progress}}</td> --}}
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                
                {{-- <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('skillUpdate' , {id:{{$skill->id}}})" data-bs-toggle="modal" data-bs-target="#editModal" 
                  ><i class="bx bx-edit-alt me-1"></i>Edit</a>   --}}
                
                  <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('subscriberDelete' , {id:{{$subscriber->id}}})"  data-bs-toggle="modal" data-bs-target="#deleteModal"
                  ><i class="bx bx-trash me-1"></i>Delete</a>
                  
                  {{-- <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('skillShow' , {id:{{$skill->id}}})"  data-bs-toggle="modal" data-bs-target="#showModal"
                  ><i class="bx bx-show-alt me-1"></i>Show</a> --}}
                         
              
              </div>
            </div>
          </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $subscribers->links() }}
    
</div>
@else
<span class="text-danger">No results found</span>
@endif
  </div>
</div>