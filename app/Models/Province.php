<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model 
{

    protected $table = 'provinces';
    public $timestamps = true;

    public function State()
    {
        return $this->belongsTo(State::class);
    }

    public function Address()
    {
        return $this->hasMany(Address::class);
    }

}