<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
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
        'role_id'
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
     * User has many tasks
     
    public function tasks(){
        Return $this->hasMany('App\Models\Task');
    }
    */

    /**
     * User has many comments
     */
    public function comments(){
        Return $this->hasMany('App\Models\Comment');
    }

    /**
     * a role belongs to a user
     */
    public function role(){
        Return $this->belongsTo('App\Models\Role');
    }

    /**
     * User as many companies
     */
    public function companies(){
        Return $this->hasMany('App\Models\Company');
    }

    
    /**
     * a user belongs to many tasks
     */
    public function tasks(){
        Return $this->belongsToMany('App\Models\Task');
    }

    /**
     * a user belongs to many projects
     */
    public function projects(){
        Return $this->belongsToMany('App\Models\project');
    }
}
