<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['make', 'model', 'colour', 'year', 'transmission', 'car_type', 'price', 'photo', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function favourites() {
        return $this->hasMany(Favourite::class);
    }
}


