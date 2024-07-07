<?php

namespace App\Models;

use App\Models\Workout;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    public function workouts()
    {
        return $this->belongsToMany(Workout::class, 'plan_workout');
    }
}
