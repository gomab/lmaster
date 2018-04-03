<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    //
    protected $fillable = [
        'task_id',
        'user_id',
    ];

     /**
     * a task belongs to many users
     */
    public function users(){
        Return $this->belongsToMany('App\Models\User');
    }
}
