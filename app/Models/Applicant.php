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

    public function ApplicantType()
    {
        return $this->hasOne('Models\AppType', 'id');
    }

    public function Address()
    {
        return $this->hasOne('Models\Address', 'id');
    }

    public function Certificate()
    {
        return $this->hasMany('Models\Certificate');
    }

}