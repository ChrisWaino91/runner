<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Plan;
use App\Models\User;
use Livewire\Livewire;
use App\Livewire\Plans;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlanTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_plans_are_visible(): void
    {
        $this->actingAs($user = User::factory()->create());

        $plan = Plan::factory()->create(['name' => 'Couch To 5k']);
        $factoryPlan = Plan::factory()->create();

        $response = $this->get('/plans');

        $response->assertStatus(200);
        $response->assertSee($plan->name);
        $response->assertSee($factoryPlan->name);
    }
}
