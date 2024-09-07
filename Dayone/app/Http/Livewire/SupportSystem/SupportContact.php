<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportContact extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-contact')
        ->layout('layouts.supportapp');
    }
}
