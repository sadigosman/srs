<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model 
{

    protected $table = 'addresses';
    public $timestamps = true;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function applicant()
    {
        return $this->belongsToMany('Models\Applicant', 'id');
    }

    public function university()
    {
        return $this->belongsToMany('Models\University', 'id');
    }

    public function faculty()
    {
        return $this->belongsToMany('Models\Faculty', 'id');
    }

    public function departments()
    {
        return $this->belongsToMany('Models\Depatrment', 'id');
    }

}