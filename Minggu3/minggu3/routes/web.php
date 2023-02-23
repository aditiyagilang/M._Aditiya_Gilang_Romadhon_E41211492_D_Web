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
    return view('profil');
});
Route::get('/coba', function () {
    return view('cobajs');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/hello', function () {
    return view("HELLO WORD");
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/profil', function () {
    return view('profil',[
        "nama" => "M. Aditiya Gilang Romadhon",
        "email" => "aditiyagilang031@gmail.com",
        "alamat" => "Jombang, Jawa Timur"
    ]);
});
Route::get('/index', function () {
    return view('landing page');
});
// ID parameter
//ini bisa dibuat untuk session 
Route::get('/index/{id}/{nama}', function ($id, $nama) {
    return view("Kami kelompok $id nama $nama");
});

//coba route menggunakan controler
Route::get('/percobaan', [cobacontroller::class, 'index']);
Route::get('/controllogin', [cobacontroller::class, 'login']);

Route::post("/dashboard", "cobacontroller@dashboard");