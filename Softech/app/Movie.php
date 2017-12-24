<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table='movie';
    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function country()
    {
        return $this->belongsTo('App\Country','country_id','id');
    }
    public function genres()
    {
        return $this->belongsTo('App\Genres','genres_id','id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment','movie_id');
    }
    public function actor()
    {
        return $this->belongsToMany('App\Actor','movie_actor','movie_id','actor_id');
    }
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
