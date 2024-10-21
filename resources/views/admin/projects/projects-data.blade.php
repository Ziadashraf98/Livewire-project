@section('css')

<link href="{{asset('front-assets')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

@endsection

<div>
    <input type="search" class="form-control mb-3 w-25" placeholder="Search" wire:model.live='search'>
        
    <div class="table-responsive text-nowrap">
        @if(count($projects) > 0)
        <table class="table">
      <thead>
          <tr>
          <th width="20%">Name</th>
          <th width="20%">Description</th>
          <th width="20%">Link</th>
          <th width="20%">Category</th>
          <th width="20%">Image</th>
          <th>Actions</th>
        </tr>
      </thead>
    <tbody class="table-border-bottom-0">
        @foreach($projects as $project)
        <tr>
          <td>{{$project->name}}</td>
          <td>{{$project->description}}</td>
          <td><a href="{{$project->link}}" target="_blank">{{$project->link}}</a></td>
          <td>{{$project->category->name}}</td>
          <td>
            <a href="{{asset('storage/'.$project->image)}}" data-lightbox="portfolio"><img class="card-img card-img-left" style="width: 40%" src="{{asset('storage/'.$project->image)}}"></a>
          </td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                
                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('projectUpdate' , {id:{{$project->id}}})" data-bs-toggle="modal" data-bs-target="#editModal" 
                  ><i class="bx bx-edit-alt me-1"></i>Edit</a>
                
                  <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('projectDelete' , {id:{{$project->id}}})"  data-bs-toggle="modal" data-bs-target="#deleteModal"
                  ><i class="bx bx-trash me-1"></i>Delete</a>
                  
                  <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('projectShow' , {id:{{$project->id}}})"  data-bs-toggle="modal" data-bs-target="#showModal"
                  ><i class="bx bx-show-alt me-1"></i>Show</a>
                         
              
              </div>
            </div>
          </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $projects->links() }}
    
</div>
@else
<span class="text-danger">No results found</span>
@endif
  </div>
</div>

@section('js')

<script src="{{asset('front-assets')}}/lib/lightbox/js/lightbox.min.js"></script>
      
@endsection