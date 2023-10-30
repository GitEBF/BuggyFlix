<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    protected $table = "acteurs";
    use HasFactory;

    public function person()
    {
       return $this->belongsTo('App\Model\Person');
    }

    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id');
    }

}