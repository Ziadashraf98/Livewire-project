<form class="row" wire:submit='submit'>
    
    <div>
        @if (session()->has('message'))
            <div class="alert alert-primary my-success-alert">
                {{ session('message') }}
            </div>
        @endif
    </div>
    
    <div class="col-md-6">
        <label  class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='setting.name'/>
        @error('setting.name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="col-md-6">
        <label  class="form-label">Email</label>
        <input type="text" class="form-control" placeholder="Email" wire:model='setting.email'/>
        @error('setting.email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="col-md-6 mt-2">
        <label  class="form-label">Address</label>
        <input type="text" class="form-control" placeholder="Address" wire:model='setting.address'/>
        @error('setting.address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="col-md-6 mt-2">
        <label  class="form-label">Phone</label>
        <input type="text" class="form-control" placeholder="Phone" wire:model='setting.phone'/>
        @error('setting.phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6 mt-2">
        <label  class="form-label">Facebook</label>
        <input type="text" class="form-control" placeholder="Facebook" wire:model="setting.link.facebook"/>
        @error('setting.link.facebook')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6 mt-2">
        <label  class="form-label">Twitter</label>
        <input type="text" class="form-control" placeholder="Twitter" wire:model="setting.link.twitter"/>
        @error('setting.link.twitter')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6 mt-2">
        <label  class="form-label">Linkedin</label>
        <input type="text" class="form-control" placeholder="Linkedin" wire:model="setting.link.linkedin"/>
        @error('setting.link.linkedin')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6 mt-2">
        <label  class="form-label">Instagram</label>
        <input type="text" class="form-control" placeholder="Instagram" wire:model="setting.link.instagram"/>
        @error('setting.link.instagram')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mt-4">
        <button class="btn btn-primary">Submit</button>
    </div>

</form>