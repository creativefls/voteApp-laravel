<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
     {
       // jika rangers maka...
       if ($request->user()->isRangers()) {
         return redirect('rangers');
       }
       // jika delegates maka..
       else if ($request->user()->isDelegates()) {
         return redirect('delegates');
       }
     }
}
