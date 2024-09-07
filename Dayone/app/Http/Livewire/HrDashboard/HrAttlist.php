<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrAttlist extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-attlist')
        ->layout('layouts.hrapp');
    }
}
