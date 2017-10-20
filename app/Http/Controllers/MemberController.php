<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

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

      /* CONTROLLER FOR ORGANISASI / Komunitas */
    /* ========================================================== */
    public function organisasi(Request $request)
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
      return view('delegates.menu_makan');
    }

}
