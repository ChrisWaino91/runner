<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'plan_id' => 1,
                'user_id' => rand(1, 5),
                'content' => 'This plan is great for beginners!',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 1,
                'user_id' => rand(1, 5),
                'content' => 'Pretty cool plan',
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 2,
                'user_id' => rand(1, 5),
                'content' => 'Great plan for intermediate users!',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 2,
                'user_id' => rand(1, 5),
                'content' => 'A bit challenging but worth it!',
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'user_id' => rand(1, 5),
                'content' => 'Tough plan but I love it!',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'user_id' => rand(1, 5),
                'content' => 'Got me through my plateau',
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'user_id' => rand(1, 5),
                'content' => 'Solid plan for advanced users!',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'plan_id' => 1,
                'user_id' => null,
                'content' => 'This made me fall back in love with running again. Thanks!',
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
