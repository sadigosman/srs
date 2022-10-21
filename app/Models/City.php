<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Znck\Eloquent\Traits\BelongsToThrough;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    use BelongsToThrough;

    protected $table = 'cities';
    public $timestamps = false;
    protected $fillable = [
        'state_id',
        'name',
        'county',
        'latitude',
        'longitude'
        , 'name_ar'
    ];

    public function state(){
        return $this->belongsTo(State::class, 'id');
   }

    public function address()
    {
        return $this->hasMany('Models\Address', 'id');
    }
    public function country()
    {
        return $this->belongsToThrough(Country::class, State::class);;
    }
}
