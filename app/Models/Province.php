<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model 
{

    protected $table = 'provinces';
    public $timestamps = true;

    public function State()
    {
        return $this->belongsTo('Models\State', 'id');
    }

    public function Address()
    {
        return $this->hasMany('Models\Address', 'province');
    }

}