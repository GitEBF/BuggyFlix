<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmGenre extends Model
{
    protected $table = "film_genre";
    use HasFactory;

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function film()
    {
        return $this->belongsTo(Genre::class, 'film_id');
    }
}
