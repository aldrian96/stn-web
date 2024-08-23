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
Route::get('/dashboard/brosur/menu_brosur', [\App\Http\Controllers\BrochureController::class, 'index'])->name('dashboard.brosur.menu_brosur');

// Define a route group with a common prefix
Route::prefix('dashboard/artikel')->name('dashboard.artikel.')->group(function () {

    // Route for the article menu
    Route::get('/menu_artikel', [\App\Http\Controllers\ArticleController::class, 'index'])
        ->name('menu_artikel');
    Route::get('/delete/{id}', [\App\Http\Controllers\ArticleController::class, 'deleteArtikel'])
        ->name('delete-artikel');

    Route::post("", [\App\Http\Controllers\ArticleController::class, 'store'])
        ->name('crud.store_artikel');

    Route::delete("", [\App\Http\Controllers\ArticleController::class, 'delete'])
        ->name('crud.delete_artikel');

    // Route for creating an article
    Route::get('/crud/create_artikel', function () {
        return view('dashboard.artikel.crud.create_artikel');
    })->name('crud.create_artikel');

    // Route for editing an article
    Route::get('/crud/edit_artikel', function () {
        return view('dashboard.artikel.crud.edit_artikel');
    })->name('crud.edit_artikel');

    // Route for article details
    Route::get('/crud/detail_artikel/{id}', [
        \App\Http\Controllers\ArticleController::class,
        'show'
    ])->name('crud.detail_artikel');
});
// Incernato
Route::get('/incernato', function () {
    return view('incernato');
})->name('incernato');

// Jasa
Route::get('/jasa', function () {
    return view('jasa');
})->name('jasa');

// Kontraktor
Route::get('/kontraktor', function () {
    return view('kontraktor');
})->name('kontraktor');

Route::get('/minta-brosur', function () {
    return view('brosur');
})->name('brosur');

Route::post(
    '/minta-brosur',
    [
        \App\Http\Controllers\BrochureController::class,
        "store"
    ]
)->name('request-brochure-store');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

// Route::get('/produk', function () {
//     return view('produk');
// })->name('produk');

Route::get('/sertifikat', function () {
    return view('sertifikat');
})->name('sertifikat');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
