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
    return view('dashboard',[
        "title" => "Dashboard"
    ]);
});
Route::get('/Home', function () {
    return view('dashboard',[
        "title" => "Dashboard"
    ]);
});
Route::get('/Utama', function () {
    return view('Utama',[
        "title" => "Utama"
    ]);
});
Route::get('/Masuk', function () {
    return view('user/Masuk');
});
Route::get('/Daftar', function () {
    return view('user/Daftar');
});
// Route::get('/Cek', function () {
//     return view('user/cek');
// });

Route::get('/komunitas', function () {
    return view('komunitas');
});
