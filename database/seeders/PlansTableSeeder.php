<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Beginner Plan',
                'short_description' => 'A plan for beginners to start their fitness journey.',
                'long_description' => 'This plan is great for beginners who are just starting their fitness journey. It includes a variety of exercises to help you get started - with a 12 week total plan and an average of 3-4 workouts per week.',
                'level' => 'Beginner',
                'image_path' => 'plans/plan-1.jpg',
                'price' => 1000,
                'sale_price' => 800,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Intermediate Plan',
                'short_description' => 'A plan for those with some experience.',
                'long_description' => 'This plan is great for those who have some experience with fitness and are looking to take their workouts to the next level. It includes a variety of exercises to help you get started - with a 12 week total plan and an average of 4-5 workouts per week.',
                'level' => 'Intermediate',
                'image_path' => 'plans/plan-2.jpg',
                'price' => 2000,
                'sale_price' => 1600,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Advanced Plan',
                'short_description' => 'A plan for advanced athletes.',
                'long_description' => 'This plan is great for advanced athletes who are looking to take their workouts to the next level. It includes a variety of exercises to help you get started - with a 12 week total plan and an average of 5-6 workouts per week.',
                'level' => 'Advanced',
                'image_path' => 'plans/plan-3.jpg',
                'price' => 3000,
                'sale_price' => 2400,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($plans as &$plan) {
            if (rand(0, 1)) {
                $plan['features'] = json_encode([
                    Str::random(10),
                    Str::random(14),
                    Str::random(8),
                ]);
            } else {
                $plan['features'] = json_encode([]);
            }
        }

        DB::table('plans')->insert($plans);
    }
}
