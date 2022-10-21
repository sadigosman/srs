<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model 
{

    protected $table = 'certificates';
    public $timestamps = true;

    public function Applicant()
    {
        return $this->belongsTo('Models\Applicant');
    }

}