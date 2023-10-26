<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    protected $table = 'films';
    use HasFactory;

    public function genres() : HasMany {
        return $this->hasMany('App\Genres');
    }
}
