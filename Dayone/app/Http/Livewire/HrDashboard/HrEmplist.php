<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrEmplist extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-emplist')
        ->layout('layouts.hrapp');
    }
}
