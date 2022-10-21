<?php

namespace App\Models;


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
        return $this->belongsTo(Country::class,'id');
    }

    
    public function cities(){
        return $this->hasMany(City::class,'id');
   }

    public function Address()
    {
        return $this->hasMany(Address::class, 'id');
    }

}