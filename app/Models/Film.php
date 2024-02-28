<?php

namespace App\Models;

use App\Events\FilmUpdated;
use App\trait\ImageUpload;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\Image;
class Film extends Model
{
    use HasFactory,ImageUpload, Sluggable;

    protected  $with = ['room'];

    protected $dispatchedEvents = [
        'updated' => FilmUpdated::class,
    ];

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



    protected $fillable =[
        'title',
        'plot',
        'imdbRating',
        'release_date',
        'genre_id',
        'director',
        'duration',


    ];


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function room()
    {

        return $this->belongsToMany(Room::class)->withPivot('show_time');


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
