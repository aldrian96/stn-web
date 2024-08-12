@extends('layouts.app')

@section('title', 'PT STN | Tentang Kami')

@section('content')
    <div class="py-8 bg-gray-100">
        <div class="w-11/12 lg:w-9/12 mx-auto">
            <div class="bg-gray-50 py-16 rounded-2xl">
                <div class="text-center max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Tentang Kami</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Menyediakan Solusi Terbaik untuk Anda
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Kami adalah perusahaan yang berkomitmen untuk memberikan solusi terbaik dalam bidang teknologi dan
                        inovasi.
                    </p>
                </div>
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 sm:px-6 lg:px-8">
                    <!-- Misi Kami -->
                    <div class="p-6 bg-white shadow-lg rounded-lg">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white mb-4">
                            <!-- Mission Icon -->
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 2a10 10 0 110 20 10 10 0 010-20z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Misi Kami</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Untuk menyediakan layanan berkualitas tinggi yang membantu klien kami mencapai tujuan mereka
                            dengan solusi inovatif.
                        </p>
                    </div>
                    <!-- Visi Kami -->
                    <div class="p-6 bg-white shadow-lg rounded-lg">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white mb-4">
                            <!-- Vision Icon -->
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12s4-8 9-8 9 8 9 8-4 8-9 8-9-8-9-8z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 12a3 3 0 110-6 3 3 0 010 6z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Visi Kami</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Menjadi pemimpin global dalam menyediakan solusi teknologi yang ramah lingkungan dan
                            berkelanjutan.
                        </p>
                    </div>
                    <!-- Nilai-Nilai Kami -->
                    <div class="p-6 bg-white shadow-lg rounded-lg">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white mb-4">
                            <!-- Values Icon -->
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 2a10 10 0 110 20 10 10 0 010-20z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Nilai-Nilai Kami</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Kami menjunjung tinggi nilai-nilai integritas, kolaborasi, dan inovasi dalam semua aspek bisnis
                            kami.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-green-600 mt-8 rounded-2xl">
                <div class="max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-2xl font-extrabold text-white">Bergabung dengan Kami</h2>
                    <p class="mt-4 text-lg leading-6 text-green-200">
                        Kami selalu mencari individu yang bersemangat dan berbakat untuk bergabung dengan tim kami. Mari
                        bersama-sama mewujudkan perubahan positif di dunia!
                    </p>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-green-600 bg-white hover:bg-green-50">
                            Lihat Kesempatan Karir
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
