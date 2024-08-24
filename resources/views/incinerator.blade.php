@extends('layouts.app')

@section('title', 'PT STN | Detail Produk')

@section('content')
<div class="py-12 bg-gray-100">
    <div class="w-full md:w-11/12 lg:w-9/12 mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex">
                <!-- Bagian Gambar Produk -->
                <div class="md:w-1/2">
                    <img src={{ URL::to('/').$data['image_preview_path'] }} alt="Produk 1" class="w-full h-full object-cover rounded-t-lg md:rounded-t-none md:rounded-l-lg">
                </div>
                <!-- Bagian Informasi Produk -->
                <div class="p-6 md:w-1/2">
                    <h1 class="text-3xl font-bold mb-4">{{ $data['name'] }}</h1>
                    <p class="text-gray-600 mb-4">
                        {{ $data['description'] }}.
                        <hr>
                    </p>
                    <hr class="my-2">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-bold text-red-500">Rp. {{ $data['price'] }}</span>
                    </div>
                    <!-- Tombol Beli lewat WhatsApp -->
                    <div class="flex items-center justify-between mb-4">
                        <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo,%20saya%20tertarik%20untuk%20membeli%20Produk%201"
                            class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-300">
                            <i class="fab fa-whatsapp mr-2"></i>Pesan lewat WhatsApp
                        </a>
                    </div>
                    <!-- Spesifikasi Produk -->
                    <div class="mt-6">
                        <h2 class="text-xl font-bold mb-2">Kapasitas Pembakaran</h2>
                        <ul class="list-disc pl-4 text-gray-600">
                            @foreach ($data['capacity'] as $spec)
                            <li>{{ $spec }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Spesifikasi Produk -->
                    <div class="mt-6">
                        <h2 class="text-xl font-bold mb-2">Spesifikasi</h2>
                        <ul class="list-disc pl-4 text-gray-600">
                            @foreach ($data['specification'] as $spec)
                            <li>{{ $spec }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Informasi Tambahan -->
                    <div class="mt-6">
                        <h2 class="text-xl font-bold mb-2">Garansi</h2>
                        <ul class="list-disc pl-4 text-gray-600">
                            @foreach ($data['additional_information'] as $mat)
                            <li>{{ $mat }}</li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection