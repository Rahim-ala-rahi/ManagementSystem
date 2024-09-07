<?php

namespace App\Http\Livewire\EmployeeDashboard;

use Livewire\Component;

class EmployeeLeaves extends Component
{
    public function render()
    {
        return view('livewire.employee-dashboard.employee-leaves')
        ->layout('layouts.empapp');
    }
}
