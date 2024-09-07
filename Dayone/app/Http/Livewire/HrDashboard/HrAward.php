<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrAward extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-award')
        ->layout('layouts.hrapp');
    }
}
