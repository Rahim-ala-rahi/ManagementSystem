<?php

namespace App\Http\Livewire\EmployeeDashboard;

use Livewire\Component;

class EmployeePayslips extends Component
{
    public function render()
    {
        return view('livewire.employee-dashboard.employee-payslips')
        ->layout('layouts.empapp');
    }
}
