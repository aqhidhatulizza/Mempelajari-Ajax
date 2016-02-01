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
Route::get('data-identitas', 'IdentitasController@getData');


Route::get('/', function () {
    return view('partials.home');

});
Route::get('create-buku', function () {
    return view('partials.buku.create');
});
Route::get('buku', 'bukuController@index');
Route::get('detail-buku/{id}', 'bukuController@show');
Route::post('buku', 'bukuController@store');

Route::put('edit-buku/{id}', 'bukuController@update');
Route::get('delete-buku/{id}', 'bukuController@destroy');
Route::get('edit-buku/{id}', 'bukuController@edit');
Route::get('data-buku', 'BukuController@getData');