<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrAddemployee extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-addemployee')
        ->layout('layouts.hrapp');
    }
}
