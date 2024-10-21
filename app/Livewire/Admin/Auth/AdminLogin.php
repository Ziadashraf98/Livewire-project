<?php

namespace App\Livewire\Admin\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Illuminate\Validation\ValidationException;

class AdminLogin extends Component
{
    public $email; 
    public $password;
    public $remember;

    public function rules()
    {
        return 
        [
            'email' => 'required|email|exists:admins,email',
            'password' => 'required',
            'remember'=>'nullable',
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

    public function submit()
    {
        $this->validate();
        
        Auth::guard('admin')->attempt(['email'=>$this->email , 'password'=>$this->password] , $this->remember) ?
        
        redirect(route('admin.index')) : throw ValidationException::withMessages(['email' => trans('auth.failed')]);
    }
    
    public function render()
    {
        return view('admin.auth.admin-login');
    }
}
