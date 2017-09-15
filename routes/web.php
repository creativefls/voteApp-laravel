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
Route::get('/rangers', 'AdminController@index')->name('rangers');
Route::get('/delegates', 'MemberController@index')->name('delegates');
