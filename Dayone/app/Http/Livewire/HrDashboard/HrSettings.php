<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrSettings extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-settings')
        ->layout('layouts.hrapp');
    }
}
