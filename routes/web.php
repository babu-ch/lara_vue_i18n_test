<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if ($lang = Session::get('locale')) {
        App::setLocale($lang);
    }
    return view('welcome');
});

Route::get('/change/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return redirect('/');
})->where('lang', 'en|jp|ru');
