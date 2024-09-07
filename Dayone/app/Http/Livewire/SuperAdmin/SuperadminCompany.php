<?php

namespace App\Http\Livewire\SuperAdmin;

use Livewire\Component;

class SuperadminCompany extends Component
{
    public function render()
    {
        return view('livewire.super-admin.superadmin-company')
        ->layout('layouts.supadminapp');
    }
}
