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

    public function genres(){
        return $this->hasMany('App\Models\FilmGenre');
    }

    public function acteurs(){
        return $this->hasMany('App\Models\Acteur');
    }

    public function producteurs(){
        return $this->hasMany('App\Models\Producteur');
    }

    public function realisateurs() {
        return $this->hasMany('App\Models\Realisateur');
    }
}
