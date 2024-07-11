<?php

namespace App\Livewire\MyPlans;

use Livewire\Component;

class Index extends Component
{
    public $plans;

    public function mount()
    {
        $this->plans = auth()->user()->plans;
    }

    public function render()
    {
        return view('livewire.my-plans.index');
    }
}
