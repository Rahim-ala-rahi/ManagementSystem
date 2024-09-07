<?php

namespace App\Http\Livewire\EmployeeDashboard;

use Livewire\Component;

class EmployeeAttendance extends Component
{
    public function render()
    {
        return view('livewire.employee-dashboard.employee-attendance')
        ->layout('layouts.empapp');
    }
}
