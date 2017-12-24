<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table='users';
    public function comments()
    {
        return $this->hasMany('App\Comment','users_id');
    }
    public function movie()
    {
        return $this->belongsToMany('App\Movie');
    }
    public function addNew($input)
    {
        $check = static::where('email',$input['email'])->first();

        if(is_null($check)){
            return static::create($input);
        }

        return $check;

    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
