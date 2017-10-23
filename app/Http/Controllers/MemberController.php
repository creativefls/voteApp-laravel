<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

use App\User;

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
      $workshop = DB::table('kelas_workshop')->get();
      $user = new User();

      return view('delegates.kelas_workshop', ['workshop' => $workshop, 'user' => $user]);
    }

      /* CONTROLLER FOR ORGANISASI / Komunitas */
    /* ========================================================== */
    public function organisasi()
    {
      //ambil value dari database
      $komunitas = DB::table('komunitas')->get();

      return view('delegates.vote_organisasi', ['komunitas' => $komunitas]);
    }

    public function detailOrganisasi($id)
    {
      $komunitas = DB::table('komunitas')->where('id', $id)->first();

      return view('delegates.detail.komunitas', ['komunitas' => $komunitas]);
    }

    /* ========================================================== */
    // controller untuk makanan
    public function menuMakan()
    {
      // flash data
      flash('Kamu hanya diberikan 1 kesempatan untuk memilih Menu Makan, jadi perhatikan pilihanmu.')->warning(); 
      // get value from database
      $menu_makan = DB::table('menu_makan')->get();
      // get value from User Model
      $user = new User();

      return view('delegates.menu_makan', ['makanan' => $menu_makan, 'user' => $user]);
    }

    public function detailMakanan($id)
    {
      $menu_makan = DB::table('menu_makan')->where('id', $id)->first();

      return view('delegates.detail.makanan', ['makanan' => $menu_makan]);
    }
}
