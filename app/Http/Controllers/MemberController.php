<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;

// use model
use App\KelasWorkshop;
use App\User;
use App\Komunitas;
use App\MenuMakan;

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

    /* CONTROLLER KELAS WORKSHOP */
    /* ========================================================== */
    public function kelasWorkshop()
    {
      // info flash data
      flash('Kamu hanya diberikan 1 kesempatan untuk memilih kelas workshop, jadi perhatikan pilihanmu.')->warning();

      //ambil value dari database
      $workshop   = KelasWorkshop::all();
      $user       = new User();

      return view('delegates.kelas_workshop', ['workshop' => $workshop, 'user' => $user]);
    }

      /* CONTROLLER FOR ORGANISASI / Komunitas */
    /* ========================================================== */
    public function organisasi()
    {
      //ambil value dari database
      $komunitas = Komunitas::all();

      return view('delegates.vote_organisasi', ['komunitas' => $komunitas]);
    }

    public function detailOrganisasi($id)
    {
      $komunitas = Komunitas::find($id);

      return view('delegates.detail.komunitas', ['komunitas' => $komunitas]);
    }

    /* ========================================================== */
    // controller untuk makanan
    public function menuMakan()
    {
      // get value from database
      $menu_makan = MenuMakan::all();
      $isChoosen  = User::find(Auth::user()->id);
      // get value from User Model
      $user = new User();

      return view('delegates.menu_makan', ['makanan' => $menu_makan, 'user' => $user,'isChoosen' => $isChoosen]);
    }

    public function detailMakanan($id)
    {
      $menu_makan = MenuMakan::find($id);

      return view('delegates.detail.makanan', ['makanan' => $menu_makan]);
    }
}
