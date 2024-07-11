<?php

namespace App\Models;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getProfilePhotoPathAttribute()
    {
        if ($this->user && $this->user->profile_photo_path) {
            return $this->user->profile_photo_path;
        } else {
            return asset('storage/seeders/avatars/default.jpg');
        }
    }
}
