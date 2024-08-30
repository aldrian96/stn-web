<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('home');

Route::get('/login', [
    App\Http\Controllers\AuthController::class,
    function () {
        return view('login');
    }
])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);

// Logout Route
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        // Brochure routes
        Route::get('/brosur/menu_brosur', [App\Http\Controllers\BrochureController::class, 'index'])
            ->name('dashboard.brosur.menu_brosur');

        // Article routes
        Route::prefix('artikel')->name('dashboard.artikel.')->group(function () {
            Route::get('/menu_artikel', [App\Http\Controllers\ArticleController::class, 'index'])
                ->name('menu_artikel');
            Route::get('/delete/{id}', [App\Http\Controllers\ArticleController::class, 'deleteArtikel'])
                ->name('delete-artikel');
            Route::post('', [App\Http\Controllers\ArticleController::class, 'store'])
                ->name('crud.store_artikel');
            Route::delete('', [App\Http\Controllers\ArticleController::class, 'delete'])
                ->name('crud.delete_artikel');

            Route::view('/crud/create_artikel', 'dashboard.artikel.crud.create_artikel')
                ->name('crud.create_artikel');
            Route::view('/crud/edit_artikel', 'dashboard.artikel.crud.edit_artikel')
                ->name('crud.edit_artikel');

            Route::get('/crud/detail_artikel/{id}', [App\Http\Controllers\ArticleController::class, 'show'])
                ->name('crud.detail_artikel');
        });
    });
});


// Detail Artikel Pembaca
Route::get('/show-artikel/{id}', [\App\Http\Controllers\ArticleController::class, 'showFullDetail'])->name('show_artikel');

// incinerator
Route::get('/incinerator', [\App\Http\Controllers\ProductController::class, 'showIncinerator'])->name('incinerator');
// Jasa
Route::get('/jasa', function (Request $request, $id = 0) {
    $data = [
        [
            "title" => "OS Security",
            "description" => "Layanan OS Security kami menawarkan perlindungan komprehensif untuk sistem operasi Anda. Kami mengidentifikasi dan menangani potensi ancaman, memastikan bahwa sistem operasi Anda tetap aman dan terlindungi dari berbagai jenis serangan cyber.",
            "price" => "RP.4XXX",
            "features" => "• Pemantauan keamanan sistem secara real-time\n• Pembaruan keamanan berkala\n• Analisis kerentanan dan patch\n• Perlindungan dari malware dan serangan ransomware\n• Penilaian keamanan sistem secara menyeluruh",
            "additional_information" => "Untuk informasi lebih lanjut atau untuk melakukan pemesanan, silakan hubungi kami di [nomor kontak] atau kunjungi website kami di [alamat website]. Kami siap membantu Anda memastikan keamanan sistem operasi Anda."
        ],
        [
            "title" => "OS Cleaning Service",
            "description" => "Layanan OS Cleaning Service kami dirancang untuk membersihkan dan mengoptimalkan sistem operasi Anda. Kami menghapus file sampah, membersihkan registry, dan mengoptimalkan performa sistem untuk memastikan komputer Anda berfungsi dengan efisien dan tanpa gangguan.",
            "price" => "RP.3XXX",
            "features" => "• Pembersihan file sementara dan cache\n• Optimasi registry untuk meningkatkan kecepatan sistem\n• Penghapusan file yang tidak diperlukan dan program yang tidak digunakan\n• Peningkatan performa sistem secara keseluruhan\n• Penjadwalan pembersihan rutin untuk hasil maksimal",
            "additional_information" => "Untuk memesan layanan ini atau mendapatkan informasi lebih lanjut, hubungi kami di [nomor kontak] atau kunjungi website kami di [alamat website]. Tim kami akan siap membantu Anda mengoptimalkan kinerja sistem operasi Anda."
        ],
        [
            "title" => "OS Driver",
            "description" => "Layanan OS Driver kami menyediakan solusi lengkap untuk mengelola dan memperbarui driver perangkat keras pada sistem operasi Anda. Kami memastikan bahwa semua driver perangkat keras terinstal dengan benar dan terbaru, untuk meningkatkan kompatibilitas dan performa perangkat Anda.",
            "price" => "RP.5XXX",
            "features" => "• Pembaruan driver perangkat keras ke versi terbaru\n• Instalasi dan konfigurasi driver yang tepat\n• Pemecahan masalah terkait driver perangkat keras\n• Backup dan pemulihan driver jika diperlukan\n• Dukungan untuk berbagai perangkat dan sistem operasi",
            "additional_information" => "Untuk informasi lebih lanjut atau untuk melakukan pemesanan, silakan hubungi kami di [nomor kontak] atau kunjungi website kami di [alamat website]. Kami siap membantu Anda memastikan bahwa semua driver perangkat keras Anda berfungsi dengan baik."
        ],
        [
            "title" => "OS Special Worker",
            "description" => "Layanan OS Special Worker kami menawarkan solusi khusus untuk mengatasi masalah dan kebutuhan khusus pada sistem operasi Anda. Kami menyediakan layanan ahli untuk pemecahan masalah yang kompleks, konfigurasi khusus, dan penyesuaian sistem operasi untuk memenuhi kebutuhan spesifik Anda.",
            "price" => "RP.6XXX",
            "features" => "• Pemecahan masalah dan perbaikan sistem operasi yang kompleks\n• Konfigurasi khusus dan penyesuaian sistem untuk kebutuhan spesifik\n• Dukungan untuk integrasi perangkat keras dan perangkat lunak\n• Penanganan isu terkait performa dan kompatibilitas\n• Konsultasi dan rekomendasi untuk peningkatan sistem",
            "additional_information" => "Untuk memesan layanan ini atau mendapatkan informasi lebih lanjut, hubungi kami di [nomor kontak] atau kunjungi website kami di [alamat website]. Tim ahli kami siap memberikan solusi terbaik untuk kebutuhan khusus sistem operasi Anda."
        ],
    ];

    $id = $request->id ?? 0;
    return view('jasa', ['data' => $data[$id]]);
})->name('jasa');

// Kontraktor
Route::get('/kontraktor', function (Request $request, $id = 0) {
    $data = [
        [
            "title" => "OS Civil",
            "description" => "Layanan OS Civil kami menyediakan dukungan teknis khusus untuk sistem operasi dalam sektor konstruksi dan proyek sipil. Kami fokus pada pengelolaan, konfigurasi, dan pemeliharaan sistem operasi yang diperlukan untuk aplikasi dan perangkat keras yang digunakan dalam proyek konstruksi, memastikan performa optimal dan keberhasilan proyek.",
            "price" => "RP.XXXX",
            "features" => "• Instalasi dan konfigurasi sistem operasi untuk aplikasi konstruksi\n• Pemeliharaan dan pembaruan sistem operasi sesuai kebutuhan proyek\n• Dukungan teknis untuk perangkat keras dan perangkat lunak khusus sektor sipil\n• Pemecahan masalah dan troubleshooting terkait sistem operasi\n• Konsultasi untuk optimasi sistem dan integrasi dengan alat proyek",
            "additional_information" => "Untuk informasi lebih lanjut atau untuk memesan layanan ini, hubungi kami di [nomor kontak] atau kunjungi website kami di [alamat website]. Kami siap memberikan dukungan terbaik untuk memastikan sistem operasi Anda mendukung kesuksesan proyek konstruksi Anda."
        ],
        [
            "title" => "OS Mechanical Elektrikal",
            "description" => "Layanan OS Mechanical Elektrikal kami menyediakan solusi profesional untuk pengelolaan dan pemeliharaan sistem operasi di berbagai proyek besar. Kami menawarkan dukungan penuh dalam perencanaan, implementasi, dan pemeliharaan sistem operasi, memastikan bahwa semua kebutuhan teknis dan operasional proyek Anda terpenuhi dengan baik.",
            "price" => "RP.XXXXX",
            "features" => "• Perencanaan dan desain sistem operasi untuk proyek besar\n• Implementasi sistem operasi sesuai dengan spesifikasi proyek\n• Pengelolaan dan pemeliharaan sistem secara berkelanjutan\n• Dukungan teknis dan troubleshooting selama proyek berlangsung\n• Konsultasi dan rekomendasi untuk pengoptimalan sistem",
            "additional_information" => "Untuk memesan layanan ini atau mendapatkan informasi lebih lanjut, silakan hubungi kami di [nomor kontak] atau kunjungi website kami di [alamat website]. Kami siap bekerja sama untuk memastikan kesuksesan proyek Anda."
        ],
    ];

    $id = $request->id ?? 0;
    return view('kontraktor', ['data' => $data[$id]]);
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

Route::get('/artikel', [\App\Http\Controllers\ArticleController::class, 'indexDashboard'])->name('artikel');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
