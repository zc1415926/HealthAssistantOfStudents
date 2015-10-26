<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt([
            'username'  => $request['username'],
            'password'  => $request['password']
        ]))
        {
            Flash::success("Welcome, " . Auth::user()['showname']);

            return redirect('/comment/admin');
        }
        else
        {
            Flash::error("Login failed!");

            return back();
        }
    }

    public function logout()
    {
        Auth::logout();

        Flash::message("你已经登出了");

        return back();
    }
}
