<?php

namespace App\Models;

use App\Models\Address;
use App\Models\Depatrment;
use App\Models\University;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model 
{

    protected $table = 'faculties';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function address()
    {
        return $this->hasOne(Address::class, 'id','address_id');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'id','university_id');
    }

    public function departments()
    {
        return $this->hasMany(Depatrment::class);
    }

}