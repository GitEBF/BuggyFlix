<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    protected $table = 'films';
    protected $fillable = ['titre','resume','pochette','type','brand','duree','annee','date','rating','cote','langue','subtitle'];
    use HasFactory;

    public function genres() : HasMany {
        return $this->hasMany('App\Models\FilmGenre');
    }

    public function acteurs() : HasMany {
        return $this->hasMany('App\Models\Acteur');
    }

    public function producteurs() : HasMany {
        return $this->hasMany('App\Models\Producteur');
    }

    public function realisateur() : HasMany {
        return $this->hasMany('App\Models\Realisateur');
    }
}
