<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model 
{

    protected $table = 'Countries';
    public $timestamps = true;

    public function States()
    {
        return $this->hasMany('Models\State', 'id');
    }

    public function Address()
    {
        return $this->hasMany('Models\Address', 'country');
    }

}