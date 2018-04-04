<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'name',
        'user_id',
        'project_id',
        'company_id',
        'days',
        'hours',
    ];

    /**
     * a task belongs to a user
     */
    public function user(){
        Return $this->belongsTo('App\User');
    }

    /**
     * a task belongs to a project
     */
    public function project(){
        Return $this->belongsTo('App\Models\Project');
    }

    /**
     * a task belongs to a company
     */
    public function company(){
        Return $this->belongsTo('App\Models\Company');
    }

      /**
     * a task belongs to many users
     */
    public function users(){
        Return $this->belongsToMany('App\User');
    }
}
