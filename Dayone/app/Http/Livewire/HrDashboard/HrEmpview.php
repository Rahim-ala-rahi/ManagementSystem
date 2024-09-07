<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrEmpview extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-empview')
        ->layout('layouts.hrapp');
    }
}
