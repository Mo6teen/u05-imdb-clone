<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = [
        'id',
        'title',
        'description',
        'genre',
        'rating',
        'release_date'
        /* 'image_name',
        'image_path', */
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function watchlists()
    {
        return $this->hasMany(Watchlist::class);
    }
}
