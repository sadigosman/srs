<?php

namespace App\Models;

use App\Models\City;
use App\Models\State;
use App\Models\Address;
use Illuminate\Database\Eloquent\Model;

class Country extends Model 
{

    protected $table = 'countries';
    public $timestamps = false;
    protected $fillable = [
        'name', 'code', 'name_ar'
    ];

    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class, through:State::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }

   
   

}