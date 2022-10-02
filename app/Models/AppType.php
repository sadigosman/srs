<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class AppType extends Model 
{

    protected $table = 'app_types';
    public $timestamps = true;

    public function applicants()
    {
        return $this->belongsToMany('Applicant', 'type');
    }

}