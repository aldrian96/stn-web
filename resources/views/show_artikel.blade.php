@extends('layouts.app')

@section('title', 'PT STN | Judul Artikel')

@section('content')
    <div class="py-12 bg-gray-100">
        <div class="w-11/12 lg:w-8/12 mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <!-- Breadcrumb -->
                <nav class="text-sm mb-4">
                    <a href="{{ route('home') }}" class="text-emerald-600 hover:underline">Beranda</a>
                    <span class="mx-2">/</span>
                    <a href="{{ route('artikel') }}" class="text-emerald-600 hover:underline">Artikel</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-500">Judul Artikel</span>
                </nav>

                <!-- Judul Artikel -->
                <h1 class="text-4xl font-bold text-gray-900 mb-4">
                    Judul Artikel
                </h1>
                
                <!-- Informasi Penulis dan Tanggal -->
                <div class="flex items-center text-sm text-gray-500 mb-6">
                    <img src="https://via.placeholder.com/40" alt="Penulis" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <span>Ditulis oleh <span class="font-semibold text-gray-700">Nama Penulis</span></span>
                        <span class="mx-2">•</span>
                        <span>20 Agustus 2024</span>
                    </div>
                </div>

                <!-- Tombol Berbagi -->
                <div class="flex space-x-4 mb-6">
                    <a href="#" class="text-blue-500 hover:text-blue-600">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-blue-400 hover:text-blue-500">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-green-500 hover:text-green-600">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>

                <!-- Gambar Utama -->
                <div class="mb-6">
                    <img class="w-full h-auto object-cover rounded-lg" src="https://via.placeholder.com/1200x600" alt="Judul Artikel" loading="lazy">
                </div>

                <!-- Konten Artikel -->
                <div class="text-gray-700 leading-relaxed text-lg">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat justo in sapien efficitur, ut malesuada orci vulputate. Cras id ligula quis purus congue tempor. Integer non ligula in lacus dapibus feugiat.</p>
                    <blockquote class="border-l-4 border-emerald-500 pl-4 my-4 italic text-gray-600">
                        "Kutipan penting dari artikel ini yang layak disoroti."
                    </blockquote>
                    <p class="mt-4">Donec ut risus eros. Nam ac lobortis massa. Phasellus id vestibulum libero. Etiam sollicitudin dui vel tellus aliquet, vitae lacinia nulla viverra.</p>
                    <p class="mt-4">Curabitur volutpat libero a nisl elementum, at consequat metus cursus. Duis non libero sapien. In ut sapien et neque vehicula volutpat.</p>
                </div>

                <!-- Artikel Terkait -->
                <div class="mt-12">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Artikel Terkait</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Artikel terkait item -->
                        <div class="bg-gray-100 rounded-lg p-4">
                            <img src="https://via.placeholder.com/300x200" alt="Artikel Terkait" class="w-full h-40 object-cover rounded-lg mb-3">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Judul Artikel Terkait</h4>
                            <a href="#" class="text-emerald-600 hover:underline">Baca Selengkapnya</a>
                        </div>
                        <!-- Tambahkan artikel terkait lainnya di sini -->
                    </div>
                </div>

                <!-- Tombol Kembali ke Daftar Artikel -->
                <div class="mt-8">
                    <a href="{{ route('artikel') }}" class="text-emerald-600 hover:underline">
                        &larr; Kembali ke Daftar Artikel
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection