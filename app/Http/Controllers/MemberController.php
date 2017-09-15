<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use User;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // return view

    public function index()
    {
      return view('delegates.delegates_dashboard');
    }
}
