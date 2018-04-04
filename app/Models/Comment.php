<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'body',
        'url',
        'user_id',
        'commentable_id',
        'commentable_type',
    ];

     /**
     * a comment belongs to a user
    
    public function user(){
        Return $this->belongsTo('App\User');
    }
     */
}
