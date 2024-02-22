<?php

namespace App\Models;

use App\ImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory,ImageUpload;
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
