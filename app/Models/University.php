<?php

namespace App\Models;

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
        return $this->hasMany(Faculty::class);
    }

    public function Address()
    {
        return $this->hasOne('App\Models\Address','id');
    }

}