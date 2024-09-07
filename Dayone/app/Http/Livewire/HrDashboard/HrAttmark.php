<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrAttmark extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-attmark')
        ->layout('layouts.hrapp');
    }
}
