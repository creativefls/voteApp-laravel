<?php

/*
* VOTE APP - Laravel Version
* See Codeigniter Version : https://github.com/creativefls/voteApp
* Author : @idindrakusuma | www.idindrakusuma.web.id
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
