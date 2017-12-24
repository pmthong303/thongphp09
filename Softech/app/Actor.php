<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table='actor';
    public function movie()
    {
        return $this->belongsToMany('App\Movie');
    }
}
