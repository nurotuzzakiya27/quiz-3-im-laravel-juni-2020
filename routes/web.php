<?php

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


Route::get('/', function () {
    return view('home'); //menampilkan ERD
});
Route::get('/template', function () {
    return view('layouts/isi'); //menampilkan ERD
});
Route::get('/artikel', 'ArtikelController@index'); //menampilkan daftar artikel
Route::get('/artikel/create', 'ArtikelController@create'); //create artikel
Route::post('/artikel', 'ArtikelController@store')->name('artikelStore');; //menyimpan form artikel
Route::get('/artikel/{id}', 'ArtikelController@detail'); //menampilkan detail artikel
Route::put('/artikel/{id}', 'ArtikelController@update'); //menampilkan detail artikel
Route::get('/artikel/{id}/edit', 'ArtikelController@edit'); //mengedit artikel
Route::get('/artikel/{id}/delete', 'ArtikelController@delete'); //menghapus artikel



// Route::get('/pertanyaan', 'PertanyaanController@index'); //menampilkan daftar pertanyaan
// Route::get('/pertanyaan/create', 'PertanyaanController@create'); //create pertanyaan
// Route::post('/pertanyaan', 'PertanyaanController@store'); //meyimpan form pertanyaan
// Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@detail'); //menampilkan detail pertanyaan
// Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit'); //menampilkan detail pertanyaan
// Route::get('/pertanyaan/{pertanyaan_id}/delete', 'PertanyaanController@delete'); //menampilkan detail pertanyaan
// Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update'); //menampilkan detail pertanyaan

// Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
// Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store')->name('jawabanStore');