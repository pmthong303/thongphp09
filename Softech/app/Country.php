<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table='country';
    public function movies()
    {
        return $this->hasMany('App\movie','country_id');
    }
}
