<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Brosur
Route::get('/dashboard/brosur/menu_brosur', function () {
    return view('dashboard.brosur.menu_brosur');
})->name('dashboard.brosur.menu_brosur');

// Artikel
Route::get('/dashboard/artikel/menu_artikel', function () {
    return view('dashboard.artikel.menu_artikel');
})->name('dashboard.artikel.menu_artikel');

// Create Artikel
Route::get('/dashboard/artikel/crud/create_artikel', function () {
    return view('dashboard.artikel.crud.create_artikel');
})->name('dashboard.artikel.crud.create_artikel');

// Edit Artikel
Route::get('/dashboard/artikel/crud/edit_artikel', function () {
    return view('dashboard.artikel.crud.edit_artikel');
})->name('dashboard.artikel.crud.edit_artikel');

// Detail Artikel
Route::get('/dashboard/artikel/crud/detail_artikel', function () {
    return view('dashboard.artikel.crud.detail_artikel');
})->name('dashboard.artikel.crud.detail_artikel');

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
