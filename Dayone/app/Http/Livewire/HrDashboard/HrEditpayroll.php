<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrEditpayroll extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-editpayroll')
        ->layout('layouts.hrapp');
    }
}
