<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrRecentleaves extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-recentleaves')
        ->layout('layouts.hrapp');
    }
}
