<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrEvents extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-events')
        ->layout('layouts.hrapp');
    }
}
