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

Route::get('/profile', 'ProfileController@index');
Route::get('/dashboard', 'ProfileController@dashboard');
Route::post('/profile/store', 'ProfileController@store');
Route::get('/profile/{id?}', 'ProfileController@show');
Route::post('/profile/update/{id?}', 'ProfileController@update');
Route::delete('/profile/{id?}', 'ProfileController@destroy');
