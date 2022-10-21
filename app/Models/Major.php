<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model 
{

    protected $table = 'majors';
    public $timestamps = true;

    public function Department()
    {
        return $this->belongsTo('Models\Depatrment', 'id');
    }

    public function Address()
    {
        return $this->hasOne('Models\Address', 'address');
    }

}