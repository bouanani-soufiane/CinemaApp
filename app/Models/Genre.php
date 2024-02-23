<?php

namespace App\Models;

use App\trait\ImageUpload;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory,ImageUpload, Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected $with = ['film','image'];

    protected $fillable = ['name' , 'description'];
    public function film()
    {
        return $this->hasMany(Film::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
