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

    /* ------------------------------------------------------------------ */
    /*                    Dashboard for Delegates                         */
    /* ------------------------------------------------------------------ */
    public function index()
    {
      $isDoing = User::find(Auth::user()->id);

      return view('delegates.delegates_dashboard', ['isDoing' => $isDoing]);
    }

    /* ------------------------------------------------------------------ */
    /*                  CONTROLLER KELAS WORKSHOP                         */
    /* ------------------------------------------------------------------ */
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

    /* ------------------------------------------------------------------ */
    /*              Controller untuk komunitas / organisasi
    /* ------------------------------------------------------------------ */
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

    /* ------------------------------------------------------------------ */
    //                    controller untuk makanan
    /* ------------------------------------------------------------------ */
    public function menuMakan()
    {
      $fitur = WaktuBuka::all()->where('kode_fitur', 'MM')->first(); //MM is code for Menu Makan
      if ($fitur->is_buka == 0) {
        flash('Oups! Saat ini <b> pemilihan menu makan</b> belum kami buka. Kami segera memberi tahu kamu jika fitur ini sudah dibuka. :)')->error()->important();
        return redirect('/delegates');
      }
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


    // ------------------------------------------------------------ \\
    //    VOTE KOMUNITAS, PILIH MAKAN DAN PILIH KELAS WORKSHOP
    // ------------------------------------------------------------ \\
    public function pilihKomunitas(Request $request)
    {
      // cek dulu apakah user sudah memilih komunitas..
      $user = User::all()->where('id', $request['user'])->first();
      if ($user->komunitas_id == null) {
        // jika belum maka isi..
        $user->update([
          'komunitas_id' => $request['komunitas_id']
        ]);
      }
      else {
        // kirimkan flash data
        flash('Oups! kamu sudah melakukan <b>vote komunitas</b>')->error()->important();
      }

      return redirect('delegates/vote-organisasi');
    }

    // ------------------------------------------------------------ \\
    //                      PILIH MENU MAKAN
    // ------------------------------------------------------------ \\
    public function pilihMakan(Request $request)
    {
      $kuota = $request->user()->sumMakanan($request['makan_id']);
      $user  = User::all()->where('id', $request['user'])->first();

      // cek dulu apakah user sudah memilih..
      if ($user->makan_id == null) {
        // jika belum.. finalisasi untuk cek kuota makanan
        if ($kuota >= 100) {
          flash('Oups! kuota habis :( silahkan pilih <b>menu makan</b> yang lain ya :)')->error()->important();
        }
        else {
          $user->update([
            'makan_id' => $request['makan_id']
          ]);
        }
      }
      else {
        flash('Oups! kamu sudah memilih <b>menu makan</b>')->error()->important();
      }

      return redirect('delegates/menu-makan');
    }

    // ------------------------------------------------------------ \\
    //                   PILIH KELAS WORKSHOP
    // ------------------------------------------------------------ \\
    public function pilihWorkshop(Request $request)
    {
      $kuota = $request->user()->sumKelas($request['kelas_id']);
      $user  = User::all()->where('id', $request['user'])->first();

      if ($user->kelas_id == null) {
        if ($kuota >= 49) {
          flash('Oups! kuota habis :( silahkan pilih <b>menu makan</b> yang lain ya :)')->error()->important();
        }
        else {
          $user->update([
            'kelas_id' => $request['kelas_id']
          ]);
        }
      }
      else {
        flash('Oups! kamu sudah memilih <b>Kelas Workshop</b>')->error()->important();
      }

      return redirect('delegates/kelas-workshop');
    }
}
