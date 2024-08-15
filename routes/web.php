<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
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

// angka
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

// text

Route::get('makanan/{nama_makanan}', function($nama_makanan){
    return 'Saya suka sekali memakan ' . $nama_makanan;
});

// data array

Route::get('bahasa-pemrograman/{data_array}', function($data_array) {
    $dataArray = json_decode($data_array, true); // mengubah data yg dikirimkan dari url yg berbentuk json menjadi array

    if (is_array($dataArray)) { // pengecekan apakah variable $dataArray ini merupaka jenis data arrau atau bukan
        foreach ($dataArray as $key => $value) { // proses perulangan
            echo 'Bahasa pemrograman yaitu: ' . $value . '<br>';
        }
    } else {
        return 'Format masih belum berubah';
    }
});

// blade view

Route::get('coba', function() {
    return view('coba');
});

// sb admin

Route::get('template-sb-admin', function() {
    return view('template');
});

Route::get('table-sb-admin', function() {
    $data_array = ['meja', 'kursi', 'pensil', 'pintu'];

    return view('table', compact('data_array'));
});

// route TPM sesi 2

Route::get('laravel-news', function() {
    return view('laravel-news.index');
});

//login - register
Route::get('login', function() {
    return view('login-register.login');
});

Route::get('register', function() {
    return view('login-register.register');
});

// Route::get('siswa', [SiswaController::class, 'index']);

Route::resource('siswa', SiswaController::class);

// Tugas Prakter Mandiri
Route::resource('user', UserController::class);
Route::resource('post', PostController::class);
Route::resource('comment', CommentController::class);