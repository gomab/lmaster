<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    /**
     * A role has many users
     */
    public function users(){
        Return $this->hasMany('App\Models\User');
    }
}
