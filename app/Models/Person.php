<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Person extends Model
{
    protected $table = 'Persons';
    protected $fillable = ['nom','lieuNaissance','dateNaissance','img'];
    use HasFactory;

    public function acteurs()
    {
        return $this->hasMany('App\Models\Acteur');
    }
    
    public function producteurs()
    {
        return $this->hasMany('App\Models\Producteur');
    }

    public function realisateurs()
    {
        return $this->hasMany('App\Models\Realisateur');
    }
}
