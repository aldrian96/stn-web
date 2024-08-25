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
            <!-- Deskripsi Panjang Produk -->
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-4">Deskripsi Produk</h2>
                <p class="text-gray-700 leading-relaxed">
                    Produk ini adalah salah satu inovasi terbaru kami yang dirancang dengan teknologi canggih untuk memastikan efisiensi dan performa optimal. Didesain dengan mempertimbangkan kebutuhan pelanggan, produk ini menawarkan kombinasi sempurna antara daya tahan, fungsionalitas, dan estetika yang menarik. 
                    <br><br>
                    Material berkualitas tinggi yang digunakan dalam pembuatan produk ini menjamin ketahanan dan keandalannya dalam jangka panjang. Dengan fitur-fitur canggih yang mudah digunakan, produk ini cocok untuk berbagai aplikasi, baik untuk keperluan industri maupun rumah tangga.
                    <br><br>
                    Kami juga memberikan layanan purna jual yang terbaik, termasuk garansi dan dukungan teknis yang siap membantu kapan saja. Produk ini telah melalui berbagai uji kualitas untuk memastikan bahwa Anda mendapatkan produk dengan standar tertinggi.
                    <br><br>
                    Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan lebih lanjut mengenai produk ini atau ingin melakukan pemesanan. Kami siap membantu Anda dengan pelayanan terbaik.
                </p>
            </div>
            <!-- Video Player Produk -->
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-4">Video Produk</h2>
                <div class="relative w-full h-100 bg-black rounded-lg overflow-hidden">
                    <video class="w-full h-full object-cover" controls>
                        <source src="{{ asset('/video/video1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-4">Video Produk</h2>
                <div class="relative w-full h-64 bg-black rounded-lg overflow-hidden">
                    <video class="w-full h-full object-cover" controls>
                        <source src="{{ asset('/video/video2.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
