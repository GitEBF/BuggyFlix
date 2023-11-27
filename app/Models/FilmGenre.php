<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmGenre extends Model
{
    protected $table = "film_genre";
    protected $fillable = ['genre_id','film_id'];
    use HasFactory;

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }

    public function film()
    {
        return $this->belongsTo('App\Models\Film');
    }
}
