<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'film_id', 'seat_id'];
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
    public function ticket()
    {
        return $this->hasOne(Ticket::class);
    }

}
