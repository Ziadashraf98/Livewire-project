<form id="formAuthentication" wire:submit='submit'>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter your email" autofocus  wire:model='email'/>
      @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3 form-password-toggle">
      <div class="input-group input-group-merge">
        <input type="password" class="form-control" aria-describedby="password" wire:model='password' placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"/>
        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
    </div>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" wire:model='remember' />
        <label class="form-check-label" for="remember-me"> Remember Me </label>
      </div>
    </div>
    <div class="mb-3">
      <button class="btn btn-primary d-grid w-100" type="submit">
        <span wire:loading.remove>Sign in</span>
        <span class="spinner-border spinner-border-sm text-white" style="margin: auto" wire:loading wire:target='submit' role="status">
      </button>
      </span>
    
    </div>
</form>