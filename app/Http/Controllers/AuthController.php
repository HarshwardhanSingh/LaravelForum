<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class AuthController extends Controller
{
    public function login()
    {
      return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
      $this->validate($request, User::$login_validation_rules);
      $data = $request->only('email','password');
      if(\Auth::attempt($data))
      {
          return redirect()->intended('home');
      }
      else
      {
        return back()->withInput();
      }
    }
}
