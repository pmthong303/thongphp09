<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comment';
    public function movie()
    {
        return $this->belongsTo('App\Movie','movie_id','id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','users_id','id');
    }
}
