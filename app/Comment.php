<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
    	//'name',
    	'body',
    	'url',
    	'commentable_id',
    	'commentable_type',
    	'user_id',
    ];

     /**
     * Get all of the owning commentable models.
     */
    public function commentable()
    {
        return $this->morphTo();
    }

     /**
     * Return the user associated with this comment.
     *
     * @return array
     */
     public function user()
     {
         return $this->hasOne('\App\User', 'id', 'user_id');
     }

}
