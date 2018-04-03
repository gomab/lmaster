<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'body',
        'body_url',
        'user_id',
        'commentable_id',
        'commentable_type',
    ];
}
