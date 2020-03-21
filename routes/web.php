<?php

use Illuminate\Support\Facades\Route;

/* Home Page */
Route::get('/', function () {
    return view('main',[
        'page_title' => 'Accueil de la feuil de marche'
    ]);
});

/* ShiftsController Routes */
Route::get('/shifts', 'ShiftsController@index')->name('shift.index');
Route::post('/shifts', 'ShiftsController@store')->name('shift.store');
Route::get('/shifts/create', 'ShiftsController@create')->name('shift.create');
Route::get('/shifts/{shift}', 'ShiftsController@show')->name('shift.show');
Route::get('/shifts/{shift}/edit', 'ShiftsController@edit')->name('shift.edit');
Route::delete('/shifts/{shift}', 'ShiftsController@destroy')->name('shift.delete');
Route::put('/shifts/{shift}', 'ShiftsController@update')->name('shift.update');

/* ShiftsController Routes */
Route::get('/ajax/sub_obj/{objet_id}', 'EventsController@ajax')->name('event.ajax');
// Route::get('/events', 'EventsController@index')->name('event.index')->middleware('auth');
Route::get('/events', 'EventsController@index')->name('event.index');
Route::post('/events', 'EventsController@store')->name('event.store');
Route::get('/events/create', 'EventsController@create')->name('event.create');
Route::get('/events/{event}', 'EventsController@show')->name('event.show');
Route::get('/events/{event}/edit', 'EventsController@edit')->name('event.edit');
Route::delete('/events/{event}', 'EventsController@destroy')->name('event.delete');
Route::put('/events/{event}', 'EventsController@update')->name('event.update');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function(){
    Auth::logout();
    return redirect(route('home'));
});
