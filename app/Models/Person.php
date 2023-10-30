<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Person extends Model
{
    protected $table = 'Persons';
    use HasFactory;

    public function acteurs()
    {
        return $this->hasMany('App\Models\Acteur');
    }
    
}
