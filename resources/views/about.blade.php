@extends('layouts.app')

@section('title', 'PT STN | Tentang Kami')

@section('content')
    <div class="py-12 bg-gradient-to-b from-gray-100 to-gray-200">
        <div class="w-11/12 lg:w-9/12 mx-auto">
            <div class="bg-white py-16 rounded-2xl shadow-lg transition-all duration-300 hover:shadow-xl">
                <div class="text-center max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-base text-emerald-600 font-semibold tracking-wide uppercase animate-pulse">Tentang Kami
                    </h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Menyediakan Solusi Terbaik untuk Anda
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-600 lg:mx-auto">
                        Kami adalah perusahaan yang berkomitmen untuk memberikan solusi terbaik dalam bidang teknologi dan
                        inovasi.
                    </p>
                </div>
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 sm:px-6 lg:px-8">
                    <!-- Misi Kami -->
                    <div
                        class="p-6 bg-white shadow-md rounded-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-emerald-500 text-white mb-4">
                            <i class="fa-solid fa-rocket text-xl"></i>
                        </div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Misi Kami</h3>
                        <p class="mt-2 text-base text-gray-600">
                            Untuk menyediakan layanan berkualitas tinggi yang membantu klien kami mencapai tujuan mereka
                            dengan solusi inovatif.
                        </p>
                    </div>
                    <!-- Visi Kami -->
                    <div
                        class="p-6 bg-white shadow-md rounded-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-emerald-500 text-white mb-4">
                            <i class="fa-solid fa-eye text-xl"></i>
                        </div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Visi Kami</h3>
                        <p class="mt-2 text-base text-gray-600">
                            Menjadi pemimpin global dalam menyediakan solusi teknologi yang ramah lingkungan dan
                            berkelanjutan.
                        </p>
                    </div>
                    <!-- Target Kami -->
                    <div
                        class="p-6 bg-white shadow-md rounded-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-emerald-500 text-white mb-4">
                            <i class="fa-solid fa-bullseye text-xl"></i>
                        </div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Target Kami</h3>
                        <p class="mt-2 text-base text-gray-600">
                            Kami berfokus untuk menjadi pemimpin industri dalam teknologi ramah lingkungan dan inovasi
                            berkelanjutan.
                        </p>
                    </div>


                </div>
                {{-- Nilai-Nilai Kami --}}
                <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col items-center transition-all duration-300 hover:transform hover:scale-105">
                        <div class="flex-shrink-0">
                            <i class="fas fa-balance-scale text-emerald-500 text-4xl"></i>
                        </div>
                        <div class="mt-4 text-center">
                            <h1 class="text-lg font-medium text-gray-900">Integritas</h1>
                            <p class="mt-2 text-base text-gray-600">
                                Kami selalu menjunjung tinggi integritas dalam semua tindakan kami.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center transition-all duration-300 hover:transform hover:scale-105">
                        <div class="flex-shrink-0">
                            <i class="fas fa-handshake text-emerald-500 text-4xl"></i>
                        </div>
                        <div class="mt-4 text-center">
                            <h1 class="text-lg font-medium text-gray-900">Kolaborasi</h1>
                            <p class="mt-2 text-base text-gray-600">
                                Kami percaya pada kekuatan kolaborasi untuk mencapai hasil terbaik.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center transition-all duration-300 hover:transform hover:scale-105">
                        <div class="flex-shrink-0">
                            <i class="fas fa-lightbulb text-emerald-500 text-4xl"></i>
                        </div>
                        <div class="mt-4 text-center">
                            <h1 class="text-lg font-medium text-gray-900">Inovasi</h1>
                            <p class="mt-2 text-base text-gray-600">
                                Kami berkomitmen untuk terus berinovasi dalam setiap aspek bisnis kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-emerald-600 mt-12 rounded-2xl overflow-hidden shadow-lg">
                <div class="max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-2xl font-extrabold text-white">Temukan Solusi Terbaik Kami</h2>
                    <p class="mt-4 text-lg leading-6 text-emerald-100">
                        Kami menawarkan berbagai produk inovatif yang dirancang untuk memenuhi kebutuhan Anda. Jadilah
                        bagian dari perubahan positif dengan menggunakan solusi teknologi ramah lingkungan kami.
                    </p>
                    <div class="mt-8 flex justify-center">
                        <a href="{{ route('incernato') }}"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-emerald-600 bg-white hover:bg-emerald-50 transition-colors duration-300 shadow-md hover:shadow-lg mr-4">
                            <i class="fas fa-box-open mr-2"></i> <!-- Icon untuk Lihat Katalog Produk -->
                            Lihat Katalog Produk
                        </a>
                        <a href="{{ route('kontak') }}"
                            class="inline-flex items-center justify-center px-5 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-emerald-700 transition-colors duration-300 shadow-md hover:shadow-lg">
                            <i class="fa-solid fa-phone mr-2"></i> <!-- Icon untuk Hubungi Kami -->
                            Hubungi Kami
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
