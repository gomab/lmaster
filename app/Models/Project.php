<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'company_id',
        'days',
        'user_id',
    ];

    /**
     * a project belongs to a company
     */
    public function company(){
        Return $this->belongsTo('App\Models\Company');
    }

    /**
     * a project belongs to many users
     */
    public function users(){
        Return $this->belongsToMany('App\Models\User');
    }
}
