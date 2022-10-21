<?php

namespace App\Models;

use App\Models\Major;
use App\Models\Address;
use App\Models\Faculty;
use Illuminate\Database\Eloquent\Model;

class Depatrment extends Model 
{

    protected $table = 'departements';
    public $timestamps = true;

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'id','faculty_id');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'id','address_id');
    }

    public function major()
    {
        return $this->hasMany(Major::class);
    }

}