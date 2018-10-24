<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
     protected $fillable = [
    	'name',	 
    ];

    /**
     * Get the users that owns the user. 
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
