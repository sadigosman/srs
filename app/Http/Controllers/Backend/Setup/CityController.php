<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::whereHas('state' , function($query){
            $query->whereId(request()->input('state_id',0));
        })->pluck('name','id');

        return response()->json($cities);ؤ
    }
}
