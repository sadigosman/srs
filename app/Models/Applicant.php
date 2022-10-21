<?php

namespace App\Models;


use App\Models\Address;
use App\Models\AppType;
use App\Models\Certificate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Model 
{

    protected $table = 'applicants';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function applicantType()
    {
        return $this->hasOne(AppType::class, 'id','app_type_id');
    }

    public function address()
    {
        return $this->hasOne(Address::class,'id','address_id');
    }

    public function certificate()
    {
        return $this->hasMany(Certificate::class);
    }
    

}