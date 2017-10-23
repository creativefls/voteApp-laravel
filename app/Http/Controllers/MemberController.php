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
use App\WaktuBuka;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // return view

    public function index()
    {
      $isDoing = User::find(Auth::user()->id);

      return view('delegates.delegates_dashboard', ['isDoing' => $isDoing]);
    }

    /* CONTROLLER KELAS WORKSHOP */
    /* ========================================================== */
    public function kelasWorkshop()
    {
      $fitur = WaktuBuka::all()->where('kode_fitur', 'KW')->first(); //KW is code for Kelas Workshop
      if ($fitur->is_buka == 0) {
        flash('Oups! Saat ini <b> Pemilihan Kelas Workshop</b> belum kami buka. Kami segera memberi tahu kamu jika fitur ini sudah dibuka. :)')->error()->important();
        return redirect('/delegates');
      }
      else {
        $isChoosen  = User::find(Auth::user()->id);
        $workshop   = KelasWorkshop::all();
        $user       = new User();

        return view('delegates.kelas_workshop', ['workshop' => $workshop, 'user' => $user, 'isChoosen' => $isChoosen]);
      }
    }

      /* CONTROLLER FOR ORGANISASI / Komunitas */
    /* ========================================================== */
    public function organisasi()
    {
      $fitur = WaktuBuka::all()->where('kode_fitur', 'VK')->first(); //VK is code for Vote Komunitas
      if ($fitur->is_buka == 0) {
        flash('Oups! Saat ini <b> Vote Komunitas</b> belum kami buka. Kami segera memberi tahu kamu jika fitur ini sudah dibuka. :)')->error()->important();
        return redirect('/delegates');
      }
      else {
        $isChoosen  = User::find(Auth::user()->id);
        $komunitas = Komunitas::all();

        return view('delegates.vote_organisasi', ['komunitas' => $komunitas,'isChoosen' => $isChoosen]);
      }
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
      $fitur = WaktuBuka::all()->where('kode_fitur', 'MM')->first(); //MM is code for Menu Makan
      // jika kelas belum dibuka maka..
      if ($fitur->is_buka == 0) {
        flash('Oups! Saat ini <b> pemilihan menu makan</b> belum kami buka. Kami segera memberi tahu kamu jika fitur ini sudah dibuka. :)')->error()->important();
        return redirect('/delegates');
      }
      // jika kelas sudah dibuka..
      else {
        $menu_makan = MenuMakan::all();
        $isChoosen  = User::find(Auth::user()->id);
        $user       = new User();

        return view('delegates.menu_makan', ['makanan' => $menu_makan, 'user' => $user,'isChoosen' => $isChoosen]);
      }
    }

    public function detailMakanan($id)
    {
      $menu_makan = MenuMakan::find($id);

      return view('delegates.detail.makanan', ['makanan' => $menu_makan]);
    }
}
