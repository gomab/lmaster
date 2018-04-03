<?php

namespace App;

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
    public function task(){
        Return $this->belongsTo('App\Models\Task');
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
}
