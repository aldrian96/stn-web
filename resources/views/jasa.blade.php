@extends('layouts.app')

@section('title', 'PT STN | Detail Jasa')

@section('content')
<div class="py-12 bg-gray-100">
    <div class="w-full md:w-11/12 lg:w-9/12 mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex">
                <!-- Bagian Gambar Jasa -->
                <div class="md:w-1/2">
                    <img src="https://via.placeholder.com/500x500" alt="Jasa 1" class="w-full h-full object-cover rounded-t-lg md:rounded-t-none md:rounded-l-lg">
                </div>
                <!-- Bagian Informasi Jasa -->
                <div class="p-6 md:w-1/2">
                    <h1 class="text-3xl font-bold mb-4">Jasa 1</h1>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-gray-300"></i>
                        <span class="ml-2 text-gray-600">(4/5 dari 50 ulasan)</span>
                    </div>
                    <p class="text-gray-600 mb-4">Deskripsi Jasa 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita dolorem enim placeat eveniet perspiciatis voluptatibus beatae dignissimos. Nostrum, odio ducimus! Itaque in fuga molestias sunt voluptatibus, iure beatae excepturi doloremque.</p>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-bold text-red-500">Rp. 500.000</span>
                        <span class="text-lg font-medium text-gray-400 line-through">Rp. 700.000</span>
                    </div>
                    <!-- Tombol Pesan lewat WhatsApp -->
                    <div class="flex items-center justify-between mb-4">
                        <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo,%20saya%20tertarik%20untuk%20memesan%20Jasa%201" 
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
                    <!-- Fitur Jasa -->
                    <div class="mt-6">
                        <h2 class="text-xl font-bold mb-2">Fitur Jasa</h2>
                        <ul class="list-disc pl-4 text-gray-600">
                            <li>Fitur 1</li>
                            <li>Fitur 2</li>
                            <li>Fitur 3</li>
                        </ul>
                    </div>
                    <!-- Informasi Tambahan -->
                    <div class="mt-6">
                        <h2 class="text-xl font-bold mb-2">Informasi Tambahan</h2>
                        <p class="text-gray-600">Informasi tambahan tentang jasa ini.</p>
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
                    <p class="text-gray-600">"Pelayanan yang sangat baik dan profesional. Sangat direkomendasikan!"</p>
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
                    <p class="text-gray-600">"Layanan ini sangat membantu, harga sesuai dengan kualitas."</p>
                    <span class="text-sm text-gray-400">- Jane Smith</span>
                </div>
            </div>
        </div>
        <!-- Jasa Terkait -->
        <div class="mt-12">
            <h2 class="text-xl font-bold mb-4">Jasa Terkait</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card jasa terkait -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x300" alt="Jasa Terkait 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Jasa Terkait 1</h3>
                        <span class="text-indigo-500 font-bold">Rp. 300.000</span>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x300" alt="Jasa Terkait 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Jasa Terkait 2</h3>
                        <span class="text-indigo-500 font-bold">Rp. 450.000</span>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x300" alt="Jasa Terkait 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">Jasa Terkait 3</h3>
                        <span class="text-indigo-500 font-bold">Rp. 400.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
