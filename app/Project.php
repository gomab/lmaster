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
     * a project belongs to a user
     */
    public function user(){
        Return $this->belongsTo('App\Models\User');
    }
}
