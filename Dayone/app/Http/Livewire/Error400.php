<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Error400 extends Component
{
    public function render()
    {
        return view('livewire.error400')
        ->layout('layouts.custom-app');
    }
}
