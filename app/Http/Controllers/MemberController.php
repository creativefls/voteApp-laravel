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

    public function index(Request $request)
    {
      // cek dulu rolenya.. delegates bukan ?
      if ($request->user()->isDelegates() == false) {
        return redirect('/');
      }
      // kalau iya diperbolehkan akses....
      return view('delegates.delegates_dashboard');
    }

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
}
