<?php

namespace App\Http\Livewire\SuperAdmin;

use Livewire\Component;

class SuperadminRole extends Component
{
    public function render()
    {
        return view('livewire.super-admin.superadmin-role')
        ->layout('layouts.supadminapp');
    }
}
