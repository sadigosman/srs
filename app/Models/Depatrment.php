<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Depatrment extends Model 
{

    protected $table = 'departements';
    public $timestamps = true;

    public function Faculty()
    {
        return $this->belongsTo('Models\Faculty', 'id');
    }

    public function Address()
    {
        return $this->hasOne('Models\Address', 'id');
    }

    public function Major()
    {
        return $this->hasMany('Models\Major', 'department');
    }

}