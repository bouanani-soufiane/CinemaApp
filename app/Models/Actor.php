<?php

namespace App\Models;

use App\trait\ImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory,ImageUpload;
    protected $fillable = ['name'];
    public function film()
    {
        return $this->belongsToMany(Film::class);

    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
