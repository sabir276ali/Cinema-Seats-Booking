<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
            'title' ,
            'genre',
            'releasing_year',
            'total_minutes',  
            'rating',
            'country' ,
            'description',
            'link',
            'image',
    ];
    public function cinema()
    {
        return $this->belongsToMany(Cinema::class, 'cinema_movie');
    }
    public function rating()
    {
        return $this->hasMany(Rating::class, 'id','m_id');
    }
}
