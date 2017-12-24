<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $table='genres';
    public function movies()
    {
        return $this->hasMany('App\movie','genres_id');
    }
}
