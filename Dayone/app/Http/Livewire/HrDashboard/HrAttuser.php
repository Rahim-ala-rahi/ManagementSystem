<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrAttuser extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-attuser')
        ->layout('layouts.hrapp');
    }
}
