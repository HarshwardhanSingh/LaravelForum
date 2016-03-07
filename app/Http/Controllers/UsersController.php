<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UsersController extends Controller
{
    public function create()
    {
      return view('users.create');
    }

    public function store(Request $request)
    {
      $this->validate($request, User::$create_validation_rules);
      $data = $request->only('name','email','password');
      $data['password'] = bcrypt($data['password']);
      $user = User::create($data);
      if($user)
      {
        \Auth::login($user);
        return redirect()->route('root');
      }
      else
      {
          return back()->withInput();
      }
    }
}
