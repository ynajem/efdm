<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('/welecome');
})->middleware('auth');

Route::get('test', function () {
    return view('test');
});

Route::resource('users', 'UsersController');
Route::resource('shifts', 'ShiftController');
Route::resource('events', 'EventController');

Route::get('lines/{status}', 'LineController@index')->where('status', '(live|closed)')->name('lines.status');
Route::resource('lines', 'LineController');

Route::get('equipements/{status}', 'EquipementController@index')->where('status', '(live|closed)')->name('equipements.status');
Route::resource('equipements', 'EquipementController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return redirect(route('login'));
});
