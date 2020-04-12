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
    return Auth::id();
    return view('test');
});

Route::get('/contact-us', 'ContactusController@create')->name('contactus.create');
Route::post('/contact-us', 'ContactusController@store')->name('contactus.store');
Route::get('/messages', 'ContactusController@index')->name('contactus.index')->middleware('admin');

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

Route::get('profile', 'ProfileController@show')->name('profile.show');
Route::put('profile', 'ProfileController@update')->name('profile.update');
Route::get('password', 'ProfileController@password')->name('profile.password');
Route::put('password', 'ProfileController@passUpdate')->name('profile.passUpdate');

Route::get('datatables', 'UsersController@datatable');
