<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dasboard')]

class DashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.dashboard.dashboard-index');
    }
}
