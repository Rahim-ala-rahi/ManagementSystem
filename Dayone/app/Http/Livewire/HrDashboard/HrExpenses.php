<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrExpenses extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-expenses')
        ->layout('layouts.hrapp');
    }
}
