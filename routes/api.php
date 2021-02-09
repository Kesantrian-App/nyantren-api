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
$url = "App\Http\Controllers";

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', $url. '\UserController@login')->name('login');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('user/detail', 'App\Http\Controllers\UserController@details');
    //PINJAM ALAT ELEKTRONIK
    Route::get('showpinjamlaptop', 'App\Http\Controllers\BorrowController@index');
    Route::post('pinjamlaptop', 'App\Http\Controllers\BorrowController@create');
    Route::get('showpinjamhp', 'App\Http\Controllers\BorrowPhoneController@index');
    Route::post('pinjamhp', 'App\Http\Controllers\BorrowPhoneController@create');
    //SETORHAFALAN
        // Route::get('showsetoran', 'App\Http\Controllers\BorrowController@index');
        // Route::post('setorhafalan', 'App\Http\Controllers\BorrowController@create');
    //LOGOUT
    Route::post('logout', 'App\Http\Controllers\UserController@logout');
});