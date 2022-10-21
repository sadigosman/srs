<?php

namespace Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Model 
{

    protected $table = 'applicants';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function applicantType()
    {
        return $this->hasOne('Models\AppType', 'id');
    }

    public function address()
    {
        return $this->hasOne('Models\Address');
    }

    public function certificate()
    {
        return $this->hasMany('Models\Certificate');
    }
    

}