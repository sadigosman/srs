<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function Show()
    {
        $users= User::all();
        dd('view user'); 
    }
}
