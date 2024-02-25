<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = ['room_id' , 'zone_id'];
    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }
    public function zone()
    {
        return $this->BelongsTo(Zone::class);
    }
    public function room()
    {
        return $this->BelongsTo(Room::class);
    }
}
