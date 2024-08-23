@extends('layouts.app')

@section('title', 'PT STN | Detail Produk')

@section('content')
<div class="py-12 bg-gray-100">
    <div class="w-full md:w-11/12 lg:w-9/12 mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex">
                <!-- Bagian Gambar Produk -->
                <div class="md:w-1/2">
                    <img src="https://via.placeholder.com/500x500" alt="Produk 1" class="w-full h-full object-cover rounded-t-lg md:rounded-t-none md:rounded-l-lg">
                </div>
                <!-- Bagian Informasi Produk -->
                <div class="p-6 md:w-1/2">
                    <h1 class="text-3xl font-bold mb-4">Produk 1</h1>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-gray-300"></i>
                        <span class="ml-2 text-gray-600">(4/5 dari 100 ulasan)</span>
                    </div>
                    <p class="text-gray-600 mb-4">Deskripsi Produk 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita dolorem enim placeat eveniet perspiciatis voluptatibus beatae dignissimos. Nostrum, odio ducimus! Itaque in fuga molestias sunt voluptatibus, iure beatae excepturi doloremque.</p>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-bold text-red-500">Rp. 600.000.000</span>
                        <span class="text-lg font-medium text-gray-400 line-through">Rp. 100.000.000</span>
                    </div>
                    <!-- Tombol Beli lewat WhatsApp -->
                    <div class="flex items-center justify-between mb-4">
                        <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo,%20saya%20tertarik%20untuk%20membeli%20Produk%201" 
                           class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-300">
                            <i class="fab fa-whatsapp mr-2"></i>Pesan lewat WhatsApp
                        </a>
                    </div>
                    <!-- Tombol Tambahan -->
                    <div class="flex space-x-4 mt-4">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-300">
                            <i class="fas fa-share-alt mr-2"></i>Bagikan
                        </button>
                    </div>
                    <!-- Spesifikasi Produk -->
                    <div class="mt-6">
                        <h2 class="text-xl font-bold mb-2">Spesifikasi</h2>
                        <ul class="list-disc pl-4 text-gray-600">
                            <li>Spesifikasi 1</li>
                            <li>Spesifikasi 2</li>
                            <li>Spesifikasi 3</li>
                        </ul>
                    </div>
                    <!-- Informasi Tambahan -->
                    <div class="mt-6">
                        <h2 class="text-xl font-bold mb-2">Informasi Tambahan</h2>
                        <p class="text-gray-600">Informasi tambahan tentang produk ini.</p>
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
                    <p class="text-gray-600">"Produk ini sangat bagus dan sesuai dengan deskripsi. Pengiriman cepat!"</p>
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
                    <p class="text-gray-600">"Luar biasa! Kualitas produk sangat memuaskan."</p>
                    <span class="text-sm text-gray-400">- Jane Smith</span>
                </div>
            </div>
        </div>
        <!-- Produk Terkait -->
        <div class="mt-12">
            <h2 class="text-xl font-bold mb-4">Produk Terkait</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card produk terkait -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x300" alt="Produk Terkait 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Produk Terkait 1</h3>
                        <span class="text-indigo-500 font-bold">Rp. 80.000</span>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x300" alt="Produk Terkait 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Produk Terkait 2</h3>
                        <span class="text-indigo-500 font-bold">Rp. 90.000</span>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x300" alt="Produk Terkait 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Produk Terkait 3</h3>
                        <span class="text-indigo-500 font-bold">Rp. 70.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
