<?php

namespace App\Http\Livewire\SuperAdmin;

use Livewire\Component;

class SuperadminSettings extends Component
{
    public function render()
    {
        return view('livewire.super-admin.superadmin-settings')
        ->layout('layouts.supadminapp');
    }
}
