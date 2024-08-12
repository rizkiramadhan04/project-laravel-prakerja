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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('hello', function() {
    return 'ini laravel saya!';
});

Route::get('tampilan/{nilai1}', function($nilai1) {
    return 'nilai saya adalah : ' . $nilai1;
});

Route::get('tambah/{nilai1}/{nilai2}', function($nilai1, $nilai2) {
    return 'nilai penjumlahan adalah : ' . $nilai1 + $nilai2;
});

Route::get('kurang/{nilai1}/{nilai2}', function($nilai1, $nilai2) {
    return 'nilai pengurangan adalah : ' . $nilai1 - $nilai2;
});

Route::get('kali/{nilai1}/{nilai2}', function($nilai1, $nilai2) {
    return 'nilai perkalian adalah : ' . $nilai1 * $nilai2;
});

Route::get('bagi/{nilai1}/{nilai2}', function($nilai1, $nilai2) {
    return 'nilai pembagian adalah : ' . $nilai1 / $nilai2;
});

