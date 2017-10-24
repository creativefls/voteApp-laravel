<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\KelasWorkshop;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /* ------------------------------------------------------------------ */
    /*                    Dashboard for Rangers                           */
    /* ------------------------------------------------------------------ */
    public function index()
    {
      $user = new User();

      return view('rangers.rangers_dashboard', ['user' => $user]);
    }

    /* ------------------------------------------------------------------ */
    /*                   Controller Kelas Workshop                        */
    /* ------------------------------------------------------------------ */
    public function kelasWorkshop()
    {
      $kelas = KelasWorkshop::all();
      $user  = new User();

      return view('rangers.kelas_workshop', ['kelas' => $kelas, 'user' => $user]);
    }
}
