<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model 
{

    protected $table = 'states';
    public $timestamps = true;

    public function Country()
    {
        return $this->belongsTo('Models\Country', 'id');
    }

    public function Provinces()
    {
        return $this->hasMany('Models\Province', 'id');
    }

    public function Address()
    {
        return $this->hasMany('Models\Address', 'state');
    }

}