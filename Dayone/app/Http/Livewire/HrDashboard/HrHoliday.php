<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrHoliday extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-holiday')
        ->layout('layouts.hrapp');
    }
}
