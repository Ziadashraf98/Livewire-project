<div class="position-relative w-100 mt-3">
    <form wire:submit='submit'>
        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" wire:model='email' type="email" placeholder="Enter Your Email" style="height: 48px;"><br>
        @include('admin.error' , ['field'=>'email'])
        @include('admin.alert-message' , ['style'=>'success'])
        <button class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
    </form>
</div>