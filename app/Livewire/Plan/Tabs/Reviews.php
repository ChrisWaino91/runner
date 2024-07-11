<?php

namespace App\Livewire\Plan\Tabs;

use App\Models\Plan;
use Livewire\Component;

class Reviews extends Component
{
    public $reviews;

    public function mount($reviews)
    {
        $this->reviews = $reviews;
    }

    public function render()
    {
        return view('livewire.plan.tabs.reviews');
    }
}
