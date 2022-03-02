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
        'release_date',
        'image_name',
        'image_path',
        'created_at',
        'updated_at',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

   /* public function watchlist()
    {
        return $this->hasOne(Watchlist::class);
    }*/
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function listentry()
    {
        return $this->hasMany(Listentry::class);
    } 
}
