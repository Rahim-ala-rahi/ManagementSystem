<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportEditprofile extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-editprofile')
        ->layout('layouts.supportapp');
    }
}
