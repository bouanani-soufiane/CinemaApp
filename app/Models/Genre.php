<?php

namespace App\Models;

use App\trait\ImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory,ImageUpload;
    protected $with = ['film'];

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
