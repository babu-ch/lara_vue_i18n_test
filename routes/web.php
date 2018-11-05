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

use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    if ($lang = Session::get('locale')) {
        App::setLocale($lang);
    } else {
        // TODO locale header
    }
    return view('welcome');
});

Route::get('/change/{lang}', function ($lang) {
    if ($lang == 'delete') {
        Session::forget('locale');
    } else {
        Session::put('locale', $lang);
    }
    return redirect('/');
})->where('lang', 'en|jp|ru|delete');
