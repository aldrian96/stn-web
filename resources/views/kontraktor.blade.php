@extends('layouts.app')

@section('title', 'PT STN | Detail Kontraktor')

@section('content')
<div class="py-12 bg-gray-100">
    <div class="w-full md:w-11/12 lg:w-9/12 mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex">
                <!-- Bagian Gambar Kontraktor -->
                <div class="md:w-1/2">
                    <img src="https://via.placeholder.com/500x500" alt="Kontraktor 1" class="w-full h-full object-cover rounded-t-lg md:rounded-t-none md:rounded-l-lg">
                </div>
                <!-- Bagian Informasi Kontraktor -->
                <div class="p-6 md:w-1/2">
                    <h1 class="text-3xl font-bold mb-4">Kontraktor 1</h1>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-gray-300"></i>
                        <span class="ml-2 text-gray-600">(4/5 dari 30 ulasan)</span>
                    </div>
                    <p class="text-gray-600 mb-4">Deskripsi Kontraktor 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita dolorem enim placeat eveniet perspiciatis voluptatibus beatae dignissimos. Nostrum, odio ducimus! Itaque in fuga molestias sunt voluptatibus, iure beatae excepturi doloremque.</p>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-bold text-red-500">Rp. 1.000.000</span>
                        <span class="text-lg font-medium text-gray-400 line-through">Rp. 1.500.000</span>
                    </div>
                    <!-- Tombol Hubungi lewat WhatsApp -->
                    <div class="flex items-center justify-between mb-4">
                        <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo,%20saya%20tertarik%20untuk%20menghubungi%20Kontraktor%201" 
                           class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-300">
                            <i class="fab fa-whatsapp mr-2"></i>Hubungi lewat WhatsApp
                        </a>
                    </div>
                    <!-- Tombol Tambahan -->
                    <div class="flex space-x-4 mt-4">
                        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300 transition-colors duration-300">
                            <i class="fas fa-heart mr-2"></i>Tambah ke Wishlist
                        </button>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-300">
                            <i class="fas fa-share-alt mr-2"></i>Bagikan
                        </button>
                    </div>
                    <!-- Layanan yang Ditawarkan -->
                    <div class="mt-6">
                        <h2 class="text-xl font-bold mb-2">Layanan yang Ditawarkan</h2>
                        <ul class="list-disc pl-4 text-gray-600">
                            <li>Layanan 1</li>
                            <li>Layanan 2</li>
                            <li>Layanan 3</li>
                        </ul>
                    </div>
                    <!-- Informasi Tambahan -->
                    <div class="mt-6">
                        <h2 class="text-xl font-bold mb-2">Informasi Tambahan</h2>
                        <p class="text-gray-600">Informasi tambahan tentang kontraktor ini.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ulasan Pengguna -->
        <div class="mt-12">
            <h2 class="text-xl font-bold mb-4">Ulasan Pengguna</h2>
            <div class="space-y-6">
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-gray-300"></i>
                    </div>
                    <p class="text-gray-600">"Pekerjaan dilakukan dengan sangat baik dan tepat waktu. Saya sangat puas!"</p>
                    <span class="text-sm text-gray-400">- John Doe</span>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-gray-300"></i>
                    </div>
                    <p class="text-gray-600">"Kontraktor yang sangat profesional. Hasil kerja memuaskan dan sesuai anggaran."</p>
                    <span class="text-sm text-gray-400">- Jane Smith</span>
                </div>
            </div>
        </div>
        <!-- Kontraktor Terkait -->
        <div class="mt-12">
            <h2 class="text-xl font-bold mb-4">Kontraktor Terkait</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card kontraktor terkait -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x300" alt="Kontraktor Terkait 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Kontraktor Terkait 1</h3>
                        <span class="text-indigo-500 font-bold">Rp. 800.000</span>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x300" alt="Kontraktor Terkait 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Kontraktor Terkait 2</h3>
                        <span class="text-indigo-500 font-bold">Rp. 1.200.000</span>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x300" alt="Kontraktor Terkait 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Kontraktor Terkait 3</h3>
                        <span class="text-indigo-500 font-bold">Rp. 1.000.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
