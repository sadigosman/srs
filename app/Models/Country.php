<?php

namespace App\Models;

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
        return $this->hasMany(State::class,'id');
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