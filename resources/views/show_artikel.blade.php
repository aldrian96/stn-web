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
                <span class="text-gray-500"> {{ $data['title'] }}</span>
            </nav>

            <!-- Judul Artikel -->
            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                {{ $data['title'] }}
            </h1>

            <!-- Informasi Penulis dan Tanggal -->
            <div class="flex items-center text-sm text-gray-500 mb-6">
                <img src="https://via.placeholder.com/40" alt="Penulis" class="w-10 h-10 rounded-full mr-3">
                <div>
                    <span>Ditulis oleh <span class="font-semibold text-gray-700">{{ $data['author'] }}</span></span>
                    <span class="mx-2">•</span>
                    <span>{{ \App\Helpers\Helper::formatToDate($data['created_at']) }}</span>
                </div>
            </div>

            <!-- Tombol Berbagi -->
            <div class="flex space-x-4 mb-6">
                <a href="#" class="text-blue-500 hover:text-blue-600">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-red-400 hover:text-blue-500">
                    <i class="fab fa-youtube"></i>
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
                {!! $data['body'] !!}
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