<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producteur extends Model
{
    protected $table = "producteurs";
    protected $fillable = ['person_id','film_id'];
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
