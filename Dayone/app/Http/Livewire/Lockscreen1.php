<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lockscreen1 extends Component
{
    public function render()
    {
        return view('livewire.lockscreen1')
        ->layout('layouts.custom-app');
    }
}
