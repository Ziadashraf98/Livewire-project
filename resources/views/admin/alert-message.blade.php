<div>
    @if (session()->has('message'))
        <div class="alert alert-{{$style ?? 'primary'}} my-success-alert">
            {{ session('message') }}
        </div>
    @endif
</div>