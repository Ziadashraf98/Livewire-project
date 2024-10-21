<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalLongTitle">{{$title}}</h5>
            <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
            ></button>
        </div>
        @include('admin.alert-message')
        <div class="modal-body">
            {{$slot}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
            </button>
            <button class="btn btn-danger" wire:click='submit'>
                @include('admin.loading' , ['buttonName'=>'Delete'])
            </button>
        </div>
        </div>
    </div>
    </div>