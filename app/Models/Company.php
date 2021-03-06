<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'user_id',
    ];

    /**
     * a campany belongs to a user
     */
    public function user(){
        Return $this->belongsTo('App\User');
    }

    /**
     * a campany as many projects
     */
    public function projects(){
        Return $this->hasMany('App\Models\Project');
    }
}
