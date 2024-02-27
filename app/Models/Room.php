<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['name','total_seats'];
    protected $with = ['zone'];
    public function film()
    {
        return $this->belongsToMany(Film::class);
    }
    public function zone()
    {
        return $this->belongsToMany(Zone::class, 'seats');
    }
}
