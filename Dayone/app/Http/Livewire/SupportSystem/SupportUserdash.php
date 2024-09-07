<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportUserdash extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-userdash')
        ->layout('layouts.supportapp');
    }
}
