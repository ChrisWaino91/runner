<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Chris Wainwright',
            'email' => 'Chris@test.com',
            'password' => Hash::make('password'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => Storage::url('public/seeders/avatars/Chris.jpg'),
            'current_team_id' => null,
        ]);

        DB::table('users')->insert([
            'name' => 'Faye Wainwright',
            'email' => 'Faye@test.com',
            'password' => Hash::make('password'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => Storage::url('public/seeders/avatars/Faye.jpg'),
            'current_team_id' => null,
        ]);

        DB::table('users')->insert([
            'name' => 'Ned Wainwright',
            'email' => 'Ned@test.com',
            'password' => Hash::make('password'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => Storage::url('public/seeders/avatars/Ned.jpg'),
            'current_team_id' => null,
        ]);

        User::factory(2)->create();
    }
}
