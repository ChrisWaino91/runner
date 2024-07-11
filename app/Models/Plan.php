<?php

namespace App\Models;

use Money\Money;
use Money\Currency;
use App\Models\Review;
use App\Models\Workout;
use Money\Currencies\ISOCurrencies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Money\Formatter\DecimalMoneyFormatter;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    protected $casts = [
        'features' => 'array',
    ];

    public function getImageUrlAttribute()
    {
        return Storage::url($this->image_path);
    }

    public function getUrlAttribute()
    {
        return route('plans.show', $this->id);
    }

    public function getSavingsAttribute()
    {
        return $this->price->subtract($this->sale_price);
    }

    public function price() :Attribute
    {
        return Attribute::make(
            get: function (int $value) {
                return new Money($value, new Currency('GBP'));
            });
    }

    public function salePrice() :Attribute
    {
        return Attribute::make(
            get: function (int $value) {
                return new Money($value, new Currency('GBP'));
            });
    }

    public function workouts()
    {
        return $this->belongsToMany(Workout::class, 'plan_workout');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function averageRating()
    {
        return $this->reviews()->avg('rating');
    }
}
