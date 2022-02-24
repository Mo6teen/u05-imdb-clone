<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserMovie extends Pivot
{
    protected $table = 'user_movies';
    protected $fillable = [
        'user_id',
        'movie_id',
    ];

    //public $timestamps = false;
}
