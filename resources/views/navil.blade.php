<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function () {
    echo('Belajar Laravel. Tulisan ini ditampilkan dari routes');
    return view ('belajar');
});

Route::get('/navil', function () {
    echo('Navil Belajar Laravel. Tulisan ini ditampilkan dari routes');
    return view ('navil');
});

Route::get('/is3', function () {
    echo('is3 Belajar Laravel. Tulisan ini ditampilkan dari routes');
    return view ('is3');
});



Route::get('/nama', function () {
    echo('Navil');
});

Route::get('/kelas', function () {
    echo('IS3'); 
});

Route::get('/nim', function () {
    echo('10520088');
});
