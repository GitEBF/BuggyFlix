<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producteur extends Model
{
    protected $table = "producteurs";
    use HasFactory;

    public function person()
    {
       return $this->belongsTo('App\Models\Person');
    }

    public function film()
    {
        return $this->belongsTo('App\Models\Film');
    }
}
