<?php

namespace App\Livewire\Plan;

use App\Models\Plan;
use Livewire\Component;

class Pricing extends Component
{
    public Plan $plan;

    public function mount(Plan $plan)
    {
        $this->plan = $plan;
    }

    public function render()
    {
        return view('livewire.plan.pricing');
    }
}
