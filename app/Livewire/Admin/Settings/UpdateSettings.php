<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{
    public $setting;

    public function rules()
    {
        return 
        [
            'setting.name'=>'required|string',
            'setting.email'=>'required|email',
            'setting.phone'=>'required|string',
            'setting.address'=>'required|string',
            'setting.link.facebook'=>'nullable|url',
            'setting.link.twitter'=>'nullable|url',
            'setting.link.linkedin'=>'nullable|url',
            'setting.link.instagram'=>'nullable|url',
        ];
    }

    public function mount()
    {
        $this->setting = Setting::first();
    }

    public function submit()
    {
        $this->validate();
        // $this->setting->update($this->rules());
        $this->setting->save();
        session()->flash('message' , 'Setting Updated Successfully.');
    }
    
    public function render()
    {
        return view('admin.settings.update-settings');
    }
}
