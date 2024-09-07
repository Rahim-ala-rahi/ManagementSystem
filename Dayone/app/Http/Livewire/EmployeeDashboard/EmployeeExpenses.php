<?php

namespace App\Http\Livewire\EmployeeDashboard;

use Livewire\Component;

class EmployeeExpenses extends Component
{
    public function render()
    {
        return view('livewire.employee-dashboard.employee-expenses')
        ->layout('layouts.empapp');
    }
}
