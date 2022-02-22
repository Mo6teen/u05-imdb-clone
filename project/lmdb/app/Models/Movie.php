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
        'image_path',
        'created_at',
        'updated_at',
    ];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
