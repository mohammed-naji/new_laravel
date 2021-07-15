<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function images() {
        return $this->morphMany(Image::class, 'imageable');
    }
}
