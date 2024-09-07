<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrLeaves extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-leaves')
        ->layout('layouts.hrapp');
    }
}
