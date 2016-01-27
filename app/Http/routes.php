<?php

Route::get('/', function () {
    return view('partials.home');

});
Route::get('create-identitas', function () {
    return view('partials.identitas.create');
});
Route::get('identitas', 'IdentitasController@index');
Route::get('identitas/{id}', 'IdentitasController@show');
Route::post('identitas', 'IdentitasController@store');

Route::put('edit-identitas/{id}', 'IdentitasController@update');
Route::get('delete-identitas/{id}', 'IdentitasController@destroy');
Route::get('edit-identitas/{id}', 'IdentitasController@edit');