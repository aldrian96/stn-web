@extends('layouts.app')

@section('title', 'PT STN | Detail Kontraktor')

@section('content')
<div class="py-12 bg-gray-100">
    <div class="w-full md:w-11/12 lg:w-9/12 mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex">
                <!-- Bagian Gambar Kontraktor -->
                <div class="md:w-1/2">
                    <img src="/img/kontraktor.jpg" alt="Kontraktor 1" class="w-full h-full object-cover rounded-t-lg md:rounded-t-none md:rounded-l-lg">
                </div>
                <!-- Bagian Informasi Kontraktor -->
                <div class="p-6 md:w-1/2">
                    <h1 class="text-3xl font-bold mb-4">{{ $data['title'] }}</h1>
                    <p class="text-gray-600 mb-4">{{$data['description']}}</p>
                    <!-- Tombol Hubungi lewat WhatsApp -->
                    <div class="flex items-center justify-between mb-4">
                        <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo,%20saya%20tertarik%20untuk%20menghubungi%20Kontraktor%201" 
                           class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-300">
                            <i class="fab fa-whatsapp mr-2"></i>Hubungi lewat WhatsApp
                        </a>
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
    </div>
</div>
@endsection
