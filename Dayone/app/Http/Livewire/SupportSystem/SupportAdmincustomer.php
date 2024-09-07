<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAdmincustomer extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-admincustomer')
        ->layout('layouts.supportapp');
    }
}
