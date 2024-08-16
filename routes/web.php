<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard/menu1', function () {
    return view('dashboard.menu1');
})->name('dashboard.menu1');

Route::get('/dashboard/menu2', function () {
    return view('dashboard.menu2');
})->name('dashboard.menu2');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/minta-brosur', function () {
    return view('brosur');
})->name('brosur');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/sertifikat', function () {
    return view('sertifikat');
})->name('sertifikat');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
