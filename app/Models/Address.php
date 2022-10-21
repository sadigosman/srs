<?php

namespace App\Models;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Faculty;
use App\Models\Applicant;
use App\Models\Depatrment;
use App\Models\University;
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
        return $this->belongsToMany(Applicant::class);
    }

    public function university()
    {
        return $this->belongsToMany(University::class);
    }

    public function faculty()
    {
        return $this->belongsToMany(Faculty::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Depatrment::class);
    }

}