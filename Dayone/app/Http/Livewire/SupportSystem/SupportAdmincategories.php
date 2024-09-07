<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAdmincategories extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-admincategories')
        ->layout('layouts.supportapp');
    }
}
