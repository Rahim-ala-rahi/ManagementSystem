<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrEmpsalary extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-empsalary')
        ->layout('layouts.hrapp');
    }
}
