<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
    	'name',
    	'project_id',
    	'user_id',
    	'days',
    	'hours',
    	'company_id',
    	  
    ];

     /**
     * Get the user that owns the task. 
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     /**
     * Get the project that owns the task. 
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }

     /**
     * Get the company that owns the task. 
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

     /**
     * The users that belong to the task user.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
