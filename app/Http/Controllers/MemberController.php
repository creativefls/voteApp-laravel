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

    public function index(Request $request)
    {
      // cek dulu rolenya.. delegates bukan ?
      if ($request->user()->isDelegates() == false) {
        return redirect('/');
      }
      // kalau iya diperbolehkan akses....
      return view('delegates.delegates_dashboard');
    }
}
