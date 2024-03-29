<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'tariff',
        'nbr_seats'
    ];
    public function room()
    {
        return $this->belongsToMany(Room::class, 'seats');
    }
    public function seats()
    {
        return Seat::whereIn('room_id', $this->room()->pluck('rooms.id'))->get();
    }
}
