<?php

namespace App\Models;

use App\trait\ImageUpload;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory,ImageUpload, Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class , 'genre_id');
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
    public function actor()
    {
        return $this->belongsToMany(Actor::class);
    }

}
