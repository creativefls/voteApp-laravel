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
      // kalau iya perbolehkan masuk...
      return view('rangers.rangers_dashboard');
    }
}
