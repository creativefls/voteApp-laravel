<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\KelasWorkshop;
use App\MenuMakan;

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

    /* ------------------------------------------------------------------ */
    /*                   Controller Menu Makan                            */
    /* ------------------------------------------------------------------ */
    public function menuMakan()
    {
      $makan = MenuMakan::all();
      $user  = new User();

      return view('rangers.menu_makan', ['makanan' => $makan, 'user' => $user]);
    }
}
