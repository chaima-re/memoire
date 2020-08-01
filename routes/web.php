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
    return view('welcome');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {

    // middlewhere auth bach tkhali ghi li m connecti youdkhol hado les pages

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users','UserController');
    // tani controller li 3andeh index w create w store ....
    // hada samouh resources
    // 3andhom route wajed 
});

