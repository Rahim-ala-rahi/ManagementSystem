<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrOverviewcldr extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-overviewcldr')
        ->layout('layouts.hrapp');
    }
}
