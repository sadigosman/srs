<?php

namespace App\Models;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model 
{

    protected $table = 'certificates';
    public $timestamps = true;

    public function Applicant()
    {
        return $this->belongsTo(Applicant::class,'id','app_id');
    }

}