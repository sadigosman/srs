<?php

namespace App\Models;

use App\Models\Address;
use App\Models\Depatrment;
use Illuminate\Database\Eloquent\Model;

class Major extends Model 
{

    protected $table = 'majors';
    public $timestamps = true;

    public function Department()
    {
        return $this->belongsTo(Depatrment::class, 'id','department_id');
    }

    public function Address()
    {
        return $this->hasOne(Address::class,'id','address_id');
    }

}