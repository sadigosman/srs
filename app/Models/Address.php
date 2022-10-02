<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model 
{

    protected $table = 'addresses';
    public $timestamps = true;

    public function Country()
    {
        return $this->belongsTo('Models\Country', 'id');
    }

    public function State()
    {
        return $this->belongsTo('Models\State', 'id');
    }

    public function Province()
    {
        return $this->belongsTo('Models\Province', 'id');
    }

    public function Applicant()
    {
        return $this->belongsToMany('Models\Applicant', 'address');
    }

    public function University()
    {
        return $this->belongsToMany('Models\University', 'address');
    }

    public function Faculty()
    {
        return $this->belongsToMany('Models\Faculty', 'address');
    }

    public function Departments()
    {
        return $this->belongsToMany('Models\Depatrment', 'address');
    }

}