<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class University extends Model 
{

    protected $table = 'universities';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function Faculty()
    {
        return $this->hasMany('Models\Faculty');
    }

    public function Address()
    {
        return $this->hasOne('Models\Address', 'id');
    }

}