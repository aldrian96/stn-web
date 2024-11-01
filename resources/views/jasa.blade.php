@extends('layouts.app')

@section('title', 'PT STN | Detail Jasa')

@section('content')
<div class="py-12 bg-gray-100">
    <div class="w-full md:w-11/12 lg:w-9/12 mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex">
                <!-- Bagian Gambar Jasa -->
                <div class="md:w-1/2">
                    <img src="/img/jasa1.jpg" alt="Jasa 1" class="w-full h-full object-cover rounded-t-lg md:rounded-t-none md:rounded-l-lg">
                </div>
                <!-- Bagian Informasi Jasa -->
                <div class="p-6 md:w-1/2">
                    <h1 class="text-3xl font-bold mb-4">{{ $data['title'] }}</h1>
                    <p class="text-gray-600 mb-4">{{$data['description']}}</p>
                    <!-- Tombol Pesan lewat WhatsApp -->
                    <div class="flex items-center justify-between mb-4">
                        <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo,%20saya%20tertarik%20untuk%20memesan%20Jasa%201"
                            class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-300">
                            <i class="fab fa-whatsapp mr-2"></i>Pesan lewat WhatsApp
                        </a>
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
    </div>
</div>
@endsection