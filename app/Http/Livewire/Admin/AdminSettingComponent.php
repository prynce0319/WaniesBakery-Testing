<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminSettingComponent extends Component
{
    
    public $company_name;
    /* public $logo; */
    public $email;
    public $phone;
    public $phone2;
    public $address;
    public $map;
    public $twitter;
    public $facebook;
    public $instagram;
    public $pinterest;
    public $youtube;
     
    public function mount()
    {
        $setting = Setting::find(1);
        if($setting)
        {
            $this->company_name = $setting->company_name;
            /* $this->logo = $setting->logo; */
            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->phone2 = $setting->phone2;
            $this->address = $setting->address;
            $this->map = $setting->map;
            $this->twitter = $setting->twitter;
            $this->facebook = $setting->facebook;
            $this->pinterest = $setting->pinterest;
            $this->instagram = $setting->instagram;
            $this->youtube = $setting->youtube;
           
        }
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'company_name' => 'required',
            /* 'logo' => 'required|mimes:jpeg,png', */
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'phone2' => 'required|numeric',
            'address' => 'required'
        ]);
    }

    public function saveSettings()
    {
            $this->validate([
                'company_name' => 'required',
                /* 'logo' => 'required|mimes:jpeg,png', */
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'phone2' => 'required|numeric',
                'address' => 'required'
                
            ]);

            $setting = Setting::find(1);
            if(!$setting)
            {
                $setting = new Setting(); 
                  
            }
            $setting->company_name= $this->company_name;
            /* $setting->logo = $this->logo; */
            $setting->email = $this->email;
            $setting->phone = $this->phone;
            $setting->phone2 = $this->phone2;
            $setting->address = $this->address;
            $setting->map = $this->map;
            $setting->twitter = $this->twitter;
            $setting->facebook = $this->facebook;
            $setting->instagram = $this->instagram;
            $setting->pinterest = $this->pinterest;
            $setting->youtube = $this->youtube;
            $setting->save();
            session()->flash('message','Settings have been Saved!');
             

        
    }

    public function render()
    {
        return view('livewire.admin.admin-setting-component')->layout('layouts.base');
    }
}
