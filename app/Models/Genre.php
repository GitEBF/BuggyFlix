<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Genre extends Model
{
    protected $table = 'genres';
    use HasFactory;

    public function filmGenre() : HasMany {
        return $this->hasMany('App\Models\FilmGenre');
    }
}
