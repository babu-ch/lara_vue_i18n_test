<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('search/{pref_name}', 'ApiController@search')->where('pref_name', 'tokyo|okinawa|hokkaido|all');
Route::get('detail/{id}', 'ApiController@detail')->where('id', '\d+');
Route::get('language', 'ApiController@getLanguageJson');

