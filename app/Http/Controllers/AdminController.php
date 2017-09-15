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
      // cek dulu rolenya... admin bukan ??
      if ($request->user()->isRangers() == false) {
        return redirect('/');
      }
      // kalau iya perbolehkan masuk...
      return view('rangers.rangers_dashboard');
    }
}
