<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function film()
    {
        return $this->hasMany(Film::class);
    }
    public function seat(): HasOne
    {
        return $this->hasMany(Seat::class);
    }
}
