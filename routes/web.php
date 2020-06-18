<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Form Builder
Route::resource('builder', 'BuilderController');

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

    Route::middleware('can:view_events')->prefix('supervision')->group(function () {
        Route::get('events', 'SupervisionController@events')->name('supervision.events');
        Route::get('lines', 'SupervisionController@lines')->name('supervision.lines');
        Route::get('equipements', 'SupervisionController@equipements')->name('supervision.equipements');
    });
    Route::resource('objets', 'ObjetController');
    // Route::resource('subobjets', 'SubobjetController');
    Route::resource('objets.subobjets', 'SubobjetController');
});

Route::middleware('can:admin')->prefix('admin')->group(function () {
    // Messages
    Route::resource('messages', 'MessageController');
    // Route::get('messages', 'ContactusController@index')->name('contactus.index');
    // Users
    Route::resource('users', 'UserController');
    // Entities
    Route::resource('entities', 'EntityController');
    // Roles
    Route::resource('roles', 'RolesController');
    // Abilities
    Route::resource('abilities', 'AbilityController');
});

// Route::get('allusers', 'UsersController@datatable');
Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
});

// Route::view('avatarr', 'profiles.avatar');
// Route::view('test', 'test');
Route::view('/reports/lines', 'reports.lines');
Route::get('/reports/{objet}', 'ReportController@datatable');
Route::view('/lolo', 'login');
