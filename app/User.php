<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'role_id',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the role that owns the user. 
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    /**
     * Get the companies for the user.
     */
    public function companies()
    {
        return $this->hasMany('App\Company');
    }

     /**
     * The tasks that belong to the user.
     */
    public function tasks()
    {
        return $this->belongsToMany('App\Task'); 
    }

     /**
     * The projects that belong to the user.
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }

    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }   

}
