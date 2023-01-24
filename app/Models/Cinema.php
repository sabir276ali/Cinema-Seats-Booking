<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'rating',
        'address',
        'description',
        'image',
    ];
    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'cinema_movie');
    }

}
