<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory,ImageUpload;
    public function film()
    {
        return $this->belongsToMany(Film::class, 'App\Models\actor_film');

    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
