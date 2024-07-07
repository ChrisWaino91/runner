<?php

use App\Models\Plan;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('a workout plan can be created', function () {
    $response = $this->post('/plans', [
        'name' => 'New Workout Plan',
        'description' => 'This is a new workout plan.',
    ]);

    $response->assertStatus(201);
    $this->assertDatabaseHas('plans', ['name' => 'New Workout Plan']);
});

test('a workout plan can be retrieved', function () {
    $plan = Plan::factory()->create([
        'name' => 'Sample Plan',
        'description' => 'This is a sample plan.',
    ]);

    $response = $this->get("/plans/{$plan->id}");

    $response->assertStatus(200)
             ->assertJson([
                 'name' => 'Sample Plan',
                 'description' => 'This is a sample plan.',
             ]);
});

test('a workout plan can be updated', function () {
    $plan = Plan::factory()->create();

    $response = $this->put("/plans/{$plan->id}", [
        'name' => 'Updated Plan Name',
        'description' => 'Updated description.',
    ]);

    $response->assertStatus(200);
    $this->assertDatabaseHas('plans', ['name' => 'Updated Plan Name']);
});

test('a workout plan can be deleted', function () {
    $plan = Plan::factory()->create();

    $response = $this->delete("/plans/{$plan->id}");

    $response->assertStatus(200);
    $this->assertDatabaseMissing('plans', ['id' => $plan->id]);
});
