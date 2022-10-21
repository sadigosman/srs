<?php

namespace App\Models;

use App\Models\Address;
use App\Models\Faculty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class University extends Model 
{

    protected $table = 'universities';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function faculty()
    {
        return $this->hasMany(Faculty::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class,'id','address_id');
    }

}