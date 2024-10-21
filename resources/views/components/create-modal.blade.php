<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">{{$title}}</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <form wire:submit='submit'>
            @include('admin.alert-message')
            <div class="modal-body">
                
                {{$slot}}
            
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                  Close
                </button>
                <button class="btn btn-primary">
                  @include('admin.loading' , ['buttonName'=>'Create'])
                </button>
              </div>
        </form>
      </div>
    </div>
</div>



