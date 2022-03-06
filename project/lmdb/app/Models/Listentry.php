<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listentry extends Model
{
    use HasFactory;

    protected $table = 'listentries';
    protected $fillable = [

        'customlist_id',
        'movie_id'
    ];

    public function customList()
    {
        return $this->belongsTo(Customlist::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
