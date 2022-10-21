<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model 
{

    protected $table = 'faculties';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function Address()
    {
        return $this->hasOne('Models\Address', 'id');
    }

    public function University()
    {
        return $this->belongsTo('Models\University', 'id');
    }

    public function Departments()
    {
        return $this->hasMany('Models\Depatrment', 'faculty');
    }

}