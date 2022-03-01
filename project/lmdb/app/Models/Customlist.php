<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customlist extends Model
{
    use HasFactory;

    protected $table = 'customlists';
    protected $fillable = [

        'user_id',
        'list_name',
        'movie_id',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);

    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);

    }
    
}

