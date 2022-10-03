<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function Show()
    {
        $data['users']= User::all();
        return view('backend.user.show',$data); 
    }
}
