<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function welcome()
    {
      if(\Auth::user())
      {
        return redirect()->route('questions.index');
      }
      return view('pages.welcome');
    }
}
