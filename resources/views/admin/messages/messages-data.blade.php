<div>
    <input type="search" class="form-control mb-3 w-25" placeholder="Search" wire:model.live='search'>
        
    <div class="table-responsive text-nowrap">
        @if(count($messages) > 0)
        <table class="table">
      <thead>
          <tr>
          <th width="25%">Name</th>
          <th width="25%">Email</th>
          <th width="25%">Subject</th>
          <th width="25%">Status</th>
          <th>Actions</th>
        </tr>
      </thead>
    <tbody class="table-border-bottom-0">
        @foreach($messages as $message)
        <tr>
          <td>{{$message->name}}</td>
          <td>{{$message->email}}</td>
          <td>{{$message->subject}}</td>
          {{-- <td class="{{$message->status == 1 ? 'text-success' : 'text-danger'}}">{{$message->status == 1 ? 'seen' : 'unseen'}}</td> --}}
          <td class="{{$message->status == 'seen' ? 'text-primary' : 'text-danger'}}">{{$message->status}}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                
                  <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('messageDelete' , {id:{{$message->id}}})"  data-bs-toggle="modal" data-bs-target="#deleteModal"
                  ><i class="bx bx-trash me-1"></i>Delete</a>
                  
                  <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('messageShow' , {id:{{$message->id}}})"  data-bs-toggle="modal" data-bs-target="#showModal"
                  ><i class="bx bx-show-alt me-1"></i>Show</a> 
              
              </div>
            </div>
          </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $messages->links() }}
    
</div>
@else
<span class="text-danger">No results found</span>
@endif
  </div>
</div>