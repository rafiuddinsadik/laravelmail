<?php

use Illuminate\Support\Facades\Route;

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
    return view('deal');
});
Route::post('/submit', 'DealController@submit')->name('deal.submit');


Route::get('/customermail', function(){
    return new \App\Mail\CustomerMail();
});