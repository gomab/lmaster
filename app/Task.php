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
}
