<?php

/*
* VOTE APP - Laravel Version
* See Codeigniter Version : https://github.com/creativefls/voteApp
* Author : @idindrakusuma | www.idindrakusuma.web.id
*/
//
// Route::get('/login', function () {
//     return view('auth.login');
// });



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/homepage', 'HomeController@index')->name('homepage');

// route group for rangers
Route::prefix('rangers')->group(function(){
  Route::get('/', 'AdminController@index')->name('dashboard');

  // with middleware isAdmin
  Route::get('kelas-workshop', 'AdminController@kelasWorkshop')->name('kelas-workshop')
        ->middleware('isRangers');
  Route::get('menu-makan', 'AdminController@menuMakan')->name('menu-makan')
        ->middleware('isRangers');
  Route::get('buka-tutup', 'AdminController@bukaTutup')->name('buka-tutup')
        ->middleware('isRangers');
  Route::get('hasil-voting', 'AdminController@hasilVoting')->name('hasil-voting')
        ->middleware('isRangers');

        // update for POST buka-tutup
  Route::post('buka-tutup-fitur', 'AdminController@updateFitur')
          ->middleware('isRangers');
});

// route group for delegates
Route::prefix('delegates')->group(function(){
  Route::get('/', 'MemberController@index')->name('dashboard');

  //->middleware('isDelegates');
  Route::get('vote-organisasi', 'MemberController@organisasi')->name('vote-organisasi')
        ->middleware('isDelegates');
  Route::get('menu-makan', 'MemberController@menuMakan')->name('menu-makan')
        ->middleware('isDelegates');
  Route::get('kelas-workshop', 'MemberController@kelasWorkshop')->name('kelas-workshop')
        ->middleware('isDelegates');

  Route::get('detail/makanan/{id}', 'MemberController@detailMakanan')->where('id', '[0-9]+');
  Route::get('detail/komunitas/{id}', 'MemberController@detailOrganisasi')->where('id', '[0-9]+');
});

// Route POST untuk delegates memilih
Route::prefix('pilih')->group(function(){
  Route::post('komunitas', 'MemberController@pilihKomunitas')->name('pilih-komunitas')
          ->middleware('isDelegates');
  Route::post('makanan', 'MemberController@pilihMakan')->name('pilih-makanan')
          ->middleware('isDelegates');
  Route::post('workshop', 'MemberController@pilihWorkshop')->name('pilih-workshop')
          ->middleware('isDelegates');
});
