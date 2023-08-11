<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', [ProdukController::class,'index']);

Route::get('/belajar', function () {
    echo('Belajar Laravel. Tulisan ini ditampilkan dari views');
    return view ('belajar');
});

Route::get('/navil', function () {
    echo('Navil Belajar Laravel. Tulisan ini ditampilkan dari views');
    return view ('navil');
});

Route::get('/is3', function () {
    echo('is3 Belajar Laravel. Tulisan ini ditampilkan dari views');
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

Route::get('/belajar', function () {
    $data['nama'] = "Navil";
    $data['jk'] = "Laki-Laki";
    return view('belajar', $data);
});

Route::get('/is3', function () {
    $data['nama'] = "Navil";
    $data['kl'] = "IS3";
    return view('is3', $data);
});

Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/create', [ProdukController::class, 'store']);
Route::get('/produk/show', [ProdukController::class, 'store']);