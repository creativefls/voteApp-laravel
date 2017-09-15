<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
      if ($request->user()->isRangers()) {
        # code...
        return view('rangers.rangers_dashboard');
      }
      return redirect('/');
    }
}
