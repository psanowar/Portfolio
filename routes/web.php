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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\LeafsController@index')->name('home');
Route::get('admin/dashboard', 'App\Http\Controllers\LeafsController@board')->name('admin.dashboard');
Route::get('admin/home', 'App\Http\Controllers\HomeLeafsController@index')->name('admin.home');
Route::put('admin/home', 'App\Http\Controllers\HomeLeafsController@update')->name('admin.home.update');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
