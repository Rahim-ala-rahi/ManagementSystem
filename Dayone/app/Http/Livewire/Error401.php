<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Error401 extends Component
{
    public function render()
    {
        return view('livewire.error401')
        ->layout('layouts.custom-app');
    }
}
