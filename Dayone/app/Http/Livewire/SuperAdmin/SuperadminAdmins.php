<?php

namespace App\Http\Livewire\SuperAdmin;

use Livewire\Component;

class SuperadminAdmins extends Component
{
    public function render()
    {
        return view('livewire.super-admin.superadmin-admins')
        ->layout('layouts.supadminapp');
        
    }
}
