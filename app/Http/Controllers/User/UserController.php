<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
        $userInfo = $request->all();

    }
}
