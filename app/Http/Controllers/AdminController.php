<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\KelasWorkshop;
use App\MenuMakan;
use App\WaktuBuka;
use App\Komunitas;

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
    /* ------------------------------------------------------------------ */
    /*               Controller Hasil Voting                              */
    /* ------------------------------------------------------------------ */
    public function hasilVoting()
    {
      $komunitas = Komunitas::all();
      $user      = new User();

      return view('rangers.hasil_voting', ['komunitas' => $komunitas, 'user' => $user]);
    }

    /* ------------------------------------------------------------------ */
    /*                Controller Buka Tutup Fitur                         */
    /* ------------------------------------------------------------------ */
    public function bukaTutup()
    {
      $fitur = WaktuBuka::all();

      return view('rangers.buka_tutup', ['fitur' => $fitur]);
    }

    public function updateFitur(Request $request)
    {
      $fitur = WaktuBuka::where('id', $request['fitur_id'])->first();
      $fitur->update([
        'is_buka' => $request['is_buka']
      ]);

      flash('Fitur berhasil diperbaharui')->success();
      return redirect('rangers/buka-tutup');
    }

}
