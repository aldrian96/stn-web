<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


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
