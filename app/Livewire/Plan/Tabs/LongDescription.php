<?php

namespace App\Livewire\Plan\Tabs;

use App\Models\Plan;
use Livewire\Component;

class LongDescription extends Component
{
    public Plan $plan;

    public function mount(Plan $plan)
    {
        $this->plan = $plan;
    }

    public function render()
    {
        return view('livewire.plan.tabs.long-description');
    }
}
