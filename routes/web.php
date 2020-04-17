<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth')->group(function () {
    Route::view('/', 'home')->name('home');

    Route::resource('shifts', 'ShiftController');

    Route::resource('events', 'EventController');

    Route::get('lines/{status}', 'LineController@index')->where('status', '(live|closed)')->name('lines.status');
    Route::resource('lines', 'LineController');

    Route::get('equipements/{status}', 'EquipementController@index')->where('status', '(live|closed)')->name('equipements.status');
    Route::resource('equipements', 'EquipementController');

    Route::get('/contact-us', 'ContactusController@create')->name('contactus.create');
    Route::post('/contact-us', 'ContactusController@store')->name('contactus.store');

    Route::get('profile', 'ProfileController@show')->name('profile.show');
    Route::put('profile', 'ProfileController@update')->name('profile.update');
    Route::get('password', 'ProfileController@password')->name('profile.password');
    Route::put('password', 'ProfileController@passUpdate')->name('profile.passUpdate');
});

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/messages', 'ContactusController@index')->name('contactus.index');
    Route::resource('users', 'UsersController');
});

Route::get('datatables', 'UsersController@datatable');
Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
});
