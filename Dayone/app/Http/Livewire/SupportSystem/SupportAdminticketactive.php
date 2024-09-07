<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAdminticketactive extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-adminticketactive')
        ->layout('layouts.supportapp');
    }
}
