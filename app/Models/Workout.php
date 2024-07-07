<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'plan_workout');
    }
}
