<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrDepartment extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-department')
        ->layout('layouts.hrapp');
    }
}
