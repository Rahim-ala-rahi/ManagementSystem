<?php

namespace App\Http\Livewire\EmployeeDashboard;

use Livewire\Component;

class EmployeeMyleaves extends Component
{
    public function render()
    {
        return view('livewire.employee-dashboard.employee-myleaves')
        ->layout('layouts.empapp');
    }
}
