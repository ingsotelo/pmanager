<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
    	'name',
    	'description',
    	'company_id',
    	'user_id',
    	'days',  
    ];

     /**
     * Get the user that owns the task. 
     */
    public function user()
    {
        return $this->belongsToMany('App\User');
    }

     /**
     * Get the company that owns the task. 
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
     * Get all of the project's comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
