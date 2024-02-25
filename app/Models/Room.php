<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['name','total_seats'];
    public function film()
    {
        return $this->hasMany(Film::class);
    }
    public function zone()
    {
        return $this->belongsToMany(Zone::class, 'seats');
    }
}
