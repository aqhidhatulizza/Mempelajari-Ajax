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
Route::delete('identitas/{id}', 'IdentitasController@destroy');
Route::post('identitas', 'IdentitasController@store');

Route::put('identitas/{id}', 'IdentitasController@update');
Route::delete('delete-identitas/{id}', 'IdentitasController@destroy');
Route::get('edit-identitas/{id}', 'IdentitasController@edit');
Route::get('data-identitas', 'IdentitasController@getData');


Route::get('/', function () {
    return view('partials.home');

});
Route::get('create-buku', function () {
    return view('partials.buku.create');
});
Route::get('buku', 'BukuController@index');
Route::get('detail-buku/{id}', 'BukuController@show');
Route::delete('buku/{id}', 'BukuController@destroy');
Route::post('buku', 'BukuController@store');

Route::put('buku/{id}', 'BukuController@update');
Route::delete('delete-buku/{id}', 'BukuController@destroy');
Route::get('edit-buku/{id}', 'BukuController@edit');
Route::get('data-buku', 'BukuController@getData');

