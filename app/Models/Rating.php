<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable =[
        'm_id','comments','star_rating'
    ];
    public function movies()
    {
        return $this->belongToMany(Movie::class, 'id','m_id');
    }
}
