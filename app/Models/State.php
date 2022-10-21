<?php

namespace App\Models;


use App\Models\City;
use App\Models\Address;
use App\Models\Country;
use Illuminate\Database\Eloquent\Model;

class State extends Model 
{

    protected $table = 'states';
    public $timestamps = false;
    protected $fillable = [
        'name', 'country_id', 'name_ar','code'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class,'id','country_id');
    }

    
    public function cities(){
        return $this->hasMany(City::class);
   }

    public function Address()
    {
        return $this->hasMany(Address::class);
    }

}