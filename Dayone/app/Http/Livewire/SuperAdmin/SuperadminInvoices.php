<?php

namespace App\Http\Livewire\SuperAdmin;

use Livewire\Component;

class SuperadminInvoices extends Component
{
    public function render()
    {
        return view('livewire.super-admin.superadmin-invoices')
        ->layout('layouts.supadminapp');
    }
}
