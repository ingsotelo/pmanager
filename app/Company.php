<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
    	'id',
    	'name',
    	'description',
    	'user_id',
        'representative',
        'address',
        'email',
        'phone',
    	
    ];

     /**
     * Get the user that owns the task. 
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function projects(){
        return $this->hasMany('App\Project');
    }

    /**
     * Get all of the company's comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

   
}
