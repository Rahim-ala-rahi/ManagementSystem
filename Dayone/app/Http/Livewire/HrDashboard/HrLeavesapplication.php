<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrLeavesapplication extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-leavesapplication')
        ->layout('layouts.hrapp');
    }
}
