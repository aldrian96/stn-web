@extends('layouts.app')

@section('title', 'PT. Sarana Tunas Niaga')

@if (session('message'))
<div class="fixed bottom-4 right-4 bg-blue-500 text-white p-4 rounded-md shadow-md max-w-xs w-full z-50">
    <button class="absolute top-2 right-2 text-white hover:text-gray-200" onclick="this.parentElement.style.display='none'">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
        <span class="sr-only">Close</span>
    </button>
    <h1>{{ session('message') }}</h1>
</div>
@endif

@section('content')
{{-- Hero Section --}}
<div class="swiper-container h-screen overflow-hidden relative">
    <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide bg-cover bg-center bg-no-repeat h-screen relative !flex items-center justify-center"
            style="background-image: url('/img/slide1.png');">
            <!-- Overlay Gelap -->
            <div class="absolute inset-0 bg-black opacity-60"></div>

            <div class="w-9/12 my-auto mx-auto relative z-10">
                <div class="lg:w-1/2">
                    <div class="flex items-center">
                        <svg class="stroke-gray-400 stroke-2 w-5 h-5">
                            <line x1="0" y1="10px" x2="10px" y2="10px" />
                        </svg>
                        <h2 class="uppercase text-xs text-white ml-2">
                            PT SARANA TUNAS NIAGA
                        </h2>
                    </div>
                    <h3 class="font-bold uppercase text-white text-3xl mt-4">
                        <span class="text-white">AG</span>
                        <span class="text-white">Incinerator</span>
                    </h3>
                    <p class="font-light text-white mt-4">
                        Solusi Sampah Masa Depan Mudah, Murah, Bersih dan Aman
                    </p>
                    <div class="flex flex-row mt-6 space-x-4">
                        <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-youtube" style="color: #ffffff;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide bg-cover bg-center bg-no-repeat h-screen relative !flex items-center justify-end"
            style="background-image: url('/img/slide2.png');">
            <!-- Overlay Gelap -->
            <div class="absolute inset-0 bg-black opacity-60"></div>

            <div class="w-9/12 mx-auto flex justify-end relative z-10">
                <div class="lg:w-1/2 text-right">
                    <div class="flex items-center justify-end">
                        <svg class="stroke-white stroke-2 w-5 h-5">
                            <line x1="0" y1="10px" x2="10px" y2="10px" />
                        </svg>
                        <h2 class="uppercase text-xs text-white ml-2">
                            PT SARANA TUNAS NIAGA
                        </h2>
                    </div>
                    <h3 class="font-bold uppercase text-white text-3xl mt-4">
                        <span class="text-white">AG</span>
                        <span class="text-white">Incinerator</span>
                    </h3>
                    <p class="font-light text-white mt-4">
                        Tanpa BBM - Tanpa Batubara - Tanpa Gas - Tanpa Listrik Incinerator Berbasis Reaktor Air pertama di dunia
                    </p>
                    <div class="flex flex-row mt-6 space-x-4 justify-end">
                        <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-youtube" style="color: #ffffff;"></i>
                    </div>
                </div>
            </div>
        </div>


        <!-- Slide 3 -->
        <div class="swiper-slide bg-cover bg-center bg-no-repeat h-screen relative !flex items-center justify-center"
            style="background-image: url('/img/slide3.png');">
            <!-- Overlay Gelap -->
            <div class="absolute inset-0 bg-black opacity-60"></div>

            <div class="w-9/12 my-auto mx-auto relative z-10">
                <div class="lg:w-1/2">
                    <div class="flex items-center">
                        <svg class="stroke-gray-400 stroke-2 w-5 h-5">
                            <line x1="0" y1="10px" x2="10px" y2="10px" />
                        </svg>
                        <h2 class="uppercase text-xs text-white ml-2">
                            PT SARANA TUNAS NIAGA
                        </h2>
                    </div>
                    <h3 class="font-bold uppercase text-white text-3xl mt-4">
                        <span class="text-white">AG</span>
                        <span class="text-white">Incinerator</span>
                    </h3>
                    <p class="font-light text-white mt-4">
                        Tanpa asap, emisi dan bau dengan spray penghilang racun Energi panas cerobong dapat dimanfaatkan Mengubah residu organik menjadi media tanam dan campuran material
                    </p>
                    <div class="flex flex-row mt-6 space-x-4">
                        <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-youtube" style="color: #ffffff;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide bg-cover bg-center bg-no-repeat h-screen relative !flex items-center justify-end"
            style="background-image: url('/img/slide4.jpeg');">
            <!-- Overlay Gelap -->
            <div class="absolute inset-0 bg-black opacity-60"></div>

            <div class="w-9/12 mx-auto flex justify-end relative z-10">
                <div class="lg:w-1/2 text-right">
                    <div class="flex items-center justify-end">
                        <svg class="stroke-white stroke-2 w-5 h-5">
                            <line x1="0" y1="10px" x2="10px" y2="10px" />
                        </svg>
                        <h2 class="uppercase text-xs text-white ml-2">
                            PT SARANA TUNAS NIAGA
                        </h2>
                    </div>
                    <h3 class="font-bold uppercase text-white text-3xl mt-4">
                        <span class="text-white">AG</span>
                        <span class="text-white">Incinerator</span>
                    </h3>
                    <p class="font-light text-white mt-4">
                        incinerator AG 50, incinerator AG 100, incinerator AG 300
                    </p>
                    <div class="flex flex-row mt-6 space-x-4 justify-end">
                        <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-youtube" style="color: #ffffff;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Add Pagination -->
    <div class="swiper-pagination z-40 absolute bottom-4 w-full text-center"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev z-40 absolute left-4 top-1/2 transform -translate-y-1/2"></div>
    <div class="swiper-button-next z-40 absolute right-4 top-1/2 transform -translate-y-1/2"></div>
</div>

{{-- About Us --}}
<div class="py-20 bg-gray-100">
    <div class="w-9/12 mx-auto">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
                <img src="/img/tentang-kami-home.png" alt="About Us" class="w-full rounded-2xl" />
            </div>
            <div class="w-full lg:w-1/2 lg:pl-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
                <div class="w-20 h-1 bg-green-500 mb-6"></div>
                <p class="text-gray-600 mb-6">
                    AG Incinerator, hasil riset berkelanjutan dan dukungan berbagai pihak, dipatenkan sebagai karya anak bangsa, hadir dalam tipe beragam untuk mengurangi beban TPA, didukung masyarakat, pemerintah, dan dunia usaha dalam pengembangannya.
                </p>

                <a href="{{ route('about') }}"
                    class="inline-flex items-center bg-gradient-to-r from-green-500 to-green-700 text-white font-bold py-3 px-6 border border-transparent rounded-full shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:scale-105">
                    <svg class="w-6 h-6 mr-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                    Baca Selengkapnya
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Product --}}
<section id="produk" class="pt-28 pb-16 bg-gray-50">
    <div class="w-9/12 mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Produk Kami</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto mt-4"></div>
            <p class="text-gray-600 mt-4 max-w-3xl mx-auto">
                Kami menawarkan berbagai produk inovatif yang dirancang untuk memberikan solusi terbaik dalam
                pengelolaan limbah dan teknologi ramah lingkungan. Setiap produk kami dirancang dengan teknologi
                mutakhir dan standar kualitas yang tinggi untuk memastikan performa optimal dan keberlanjutan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Product Card 1 (dengan efek hover) -->
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                <div class="relative h-64 overflow-hidden">
                    <img src="/img/ag50.jpeg" alt="Spray Penghilang Racun" class="w-full h-full object-cover">
                    <button onclick="showFullImage('/img/ag50.jpeg', 'Spray Penghilang Racun')"
                        class="absolute bottom-4 right-4 bg-white bg-opacity-75 p-2 rounded-full hover:bg-opacity-100 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Incinerator AG 50</h3>
                    <p class="text-gray-600 mb-4">Solusi efektif untuk menghilangkan emisi dan bau berbahaya.</p>
                    <a href="{{ route('incinerator') }}" class="text-green-500 font-semibold hover:text-green-600">Pelajari lebih lanjut
                        &rarr;</a>
                </div>
            </div>

            <!-- Product Card 2 (dengan tombol) -->
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                <div class="relative h-64 overflow-hidden">
                    <img src="/img/ag100.png" alt="Spray Penghilang Racun" class="w-full h-full object-cover">
                    <button onclick="showFullImage('/img/ag100.png', 'Spray Penghilang Racun')"
                        class="absolute bottom-4 right-4 bg-white bg-opacity-75 p-2 rounded-full hover:bg-opacity-100 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Incinerator AG 100</h3>
                    <p class="text-gray-600 mb-4">Solusi efektif untuk menghilangkan emisi dan bau berbahaya.</p>
                    <a href="{{ route('jasa') }}" class="text-green-500 font-semibold hover:text-green-600">Pelajari lebih lanjut
                        &rarr;</a>
                </div>
            </div>

            <!-- Product Card 3 (dengan efek hover) -->
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                <div class="relative h-64 overflow-hidden">
                    <img src="/img/ag300.png" alt="Spray Penghilang Racun" class="w-full h-full object-cover">
                    <button onclick="showFullImage('/img/ag300.png', 'Spray Penghilang Racun')"
                        class="absolute bottom-4 right-4 bg-white bg-opacity-75 p-2 rounded-full hover:bg-opacity-100 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Incinerator AG 300</h3>
                    <p class="text-gray-600 mb-4">Solusi efektif untuk menghilangkan emisi dan bau berbahaya.</p>
                    <a href="{{ route('kontraktor') }}" class="text-green-500 font-semibold hover:text-green-600">Pelajari lebih lanjut
                        &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk menampilkan gambar penuh -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white p-4 rounded-lg max-w-3xl max-h-full overflow-auto">
            <img id="fullImage" src="" alt="" class="max-w-full h-auto">
            <button onclick="closeModal()"
                class="mt-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">
                Tutup
            </button>
        </div>
    </div>
</section>

{{-- Sertifikat --}}
<div id="sertifikat" class="pt-28 pb-16 bg-gray-100">
    <div class="w-10/12 md:w-9/12 mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Sertifikat Kami</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto mt-2"></div>
            <p class="text-gray-600 mt-4 max-w-3xl mx-auto leading-relaxed">
                Kami bangga dengan berbagai sertifikat yang kami miliki sebagai bukti komitmen kami terhadap kualitas
                dan inovasi. Sertifikat-sertifikat ini mencerminkan standar tinggi yang kami capai dalam teknologi
                pengelolaan limbah dan solusi ramah lingkungan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div
                class="relative group overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <img src="/img/certificate.jpg" alt="Sertifikat ISO 9001"
                    class="w-full h-auto rounded-lg transform transition-transform duration-300 ease-in-out group-hover:scale-105" />
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 bg-black bg-opacity-60 rounded-lg transition-opacity duration-300 ease-in-out">
                    <p class="text-white text-lg font-semibold">Sertifikat ISO 9001</p>
                </div>
            </div>

            <div
                class="relative group overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <img src="/img/certificate.jpg" alt="Sertifikat ISO 14001"
                    class="w-full h-auto rounded-lg transform transition-transform duration-300 ease-in-out group-hover:scale-105" />
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 bg-black bg-opacity-60 rounded-lg transition-opacity duration-300 ease-in-out">
                    <p class="text-white text-lg font-semibold">Sertifikat ISO 14001</p>
                </div>
            </div>

            <div
                class="relative group overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <img src="/img/certificate.jpg" alt="Sertifikat Lainnya"
                    class="w-full h-auto rounded-lg transform transition-transform duration-300 ease-in-out group-hover:scale-105" />
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 bg-black bg-opacity-60 rounded-lg transition-opacity duration-300 ease-in-out">
                    <p class="text-white text-lg font-semibold">Sertifikat Lainnya</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('sertifikat') }}"
                class="inline-flex items-center bg-gradient-to-r from-green-500 to-green-700 text-white font-bold py-3 px-6 border border-transparent rounded-full shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:scale-105">
                <svg class="w-6 h-6 mr-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>
                Sertifikat Lainnya
            </a>
        </div>
    </div>
</div>

{{-- Artikel --}}
<div id="artikel" class="pt-28 pb-16 bg-gray-50">
    <div class="w-9/12 mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Artikel Terbaru</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto mt-4"></div>
            <p class="text-gray-600 mt-4 max-w-3xl mx-auto leading-relaxed">
                Dapatkan wawasan terbaru tentang pengelolaan limbah, teknologi ramah lingkungan, dan inovasi terbaru
                dari kami.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($artikel as $artikel)
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <img src="/img/artikel.jpg" alt="Pentingnya Pengelolaan Limbah yang Bertanggung Jawab"
                    class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">{{  $artikel['title'] }}</h3>
                    <p class="text-gray-600 mb-4">{{ $artikel['body'] }}</p>
                    <a href="{{ route('show_artikel', ['id' => $artikel['id']]) }}" class="text-green-500 font-semibold hover:text-green-600">Baca Selengkapnya
                        &rarr;</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('artikel') }}"
                class="inline-flex items-center bg-gradient-to-r from-green-500 to-green-700 text-white font-bold py-3 px-6 border border-transparent rounded-full shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:scale-105">
                <svg class="w-6 h-6 mr-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>
                Artikel Lainnya
            </a>
        </div>
    </div>
</div>

{{-- Sponsor --}}
<div class="py-20 bg-gray-100">
    <div class="w-full md:w-11/12 lg:w-9/12 mx-auto">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Sponsor Kami</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto mt-4"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Kami didukung oleh perusahaan-perusahaan ternama yang berkomitmen untuk bekerja sama dengan kami.
            </p>
        </div>

        <!-- Sponsor Logos -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <!-- Sponsor Logo 1 -->
            <div class="flex justify-center items-center">
                <img src="/img/oriented.png" alt="Sponsor 1"
                    class="w-32 grayscale hover:grayscale-0 transition duration-300">
            </div>
            <!-- Sponsor Logo 2 -->
            <div class="flex justify-center items-center">
                <img src="/img/environmental.png" alt="Sponsor 2"
                    class="w-32 grayscale hover:grayscale-0 transition duration-300">
            </div>
            <!-- Sponsor Logo 3 -->
            <div class="flex justify-center items-center">
                <img src="/img/KMH.png" alt="Sponsor 3"
                    class="w-32 grayscale hover:grayscale-0 transition duration-300">
            </div>
            <!-- Sponsor Logo 4 -->
            <div class="flex justify-center items-center">
                <img src="/img/eco-friendly.png" alt="Sponsor 4"
                    class="w-32 grayscale hover:grayscale-0 transition duration-300">
            </div>
            <!-- Sponsor Logo 5 -->
            <div class="flex justify-center items-center">
                <img src="/img/telkom.png" alt="Sponsor 5"
                    class="w-32 grayscale hover:grayscale-0 transition duration-300">
            </div>
        </div>
    </div>
</div>

{{-- Contact Us --}}
<div id="kontak" class="py-16 pt-28 bg-gray-50">
    <div class="w-10/12 md:w-8/12 mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Hubungi Kami</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto mt-4"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut tentang layanan kami, jangan ragu untuk
                menghubungi kami melalui formulir di bawah ini atau kunjungi lokasi kami di peta yang tersedia.
            </p>
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('kontak') }}"
                class="inline-flex items-center bg-gradient-to-r from-green-500 to-green-700 text-white font-bold py-3 px-6 border border-transparent rounded-full shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:scale-105">
                <i class="fa-solid fa-phone mr-2"></i>
                Hubungi Kami
            </a>
        </div>
    </div>
</div>







<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
    // ------------------- Script Modal Card Image -------------------
    function showFullImage(src, alt) {
        const modal = document.getElementById('imageModal');
        const fullImage = document.getElementById('fullImage');
        fullImage.src = src;
        fullImage.alt = alt;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
    }
    // ------------------- End Script Modal Card Image -------------------
</script>
<style>
    /* Styling untuk Pagination */
    .swiper-pagination {
        bottom: 20px !important;
        /* Menyesuaikan jarak dari bawah */
    }

    .swiper-pagination-bullet {
        background: rgba(255, 255, 255, 0.8);
        /* Warna bullet yang tidak aktif */
        width: 12px;
        /* Lebar bullet */
        height: 12px;
        /* Tinggi bullet */
        opacity: 1;
        /* Menjadikan bullet tidak transparan */
        border-radius: 50%;
        /* Membuat bullet menjadi lingkaran */
        transition: background 0.3s ease, transform 0.3s ease;
        /* Transisi untuk efek hover */
        transform: scale(0.8);
        /* Ukuran awal bullet */
    }

    .swiper-pagination-bullet-active {
        background: #ffffff;
        /* Warna bullet yang aktif */
        transform: scale(1);
        /* Ukuran bullet saat aktif */
    }

    /* Styling untuk Navigation Buttons */
    .swiper-button-prev,
    .swiper-button-next {
        width: 50px;
        /* Lebar tombol */
        height: 50px;
        /* Tinggi tombol */
        background-color: rgba(0, 0, 0, 0.5);
        /* Warna latar belakang tombol */
        border-radius: 50%;
        /* Membuat tombol menjadi bulat */
        color: #ffffff;
        /* Warna ikon tombol */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        /* Ukuran font untuk ikon */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* Shadow untuk tombol */
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        /* Transisi untuk efek hover */
        z-index: 10;
        /* Pastikan tombol tidak tertutup konten */
    }

    /* Styling untuk tombol navigasi saat hover */
    .swiper-button-prev:hover,
    .swiper-button-next:hover {
        background-color: rgba(0, 0, 0, 0.8);
        /* Warna latar belakang saat hover */
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        /* Shadow saat hover */
    }

    .swiper-button-prev::after,
    .swiper-button-next::after {
        font-family: swiper-icons;
        /* Menggunakan font ikon SwiperJS */
        font-size: 24px;
        /* Ukuran font ikon */
    }

    /* Menyembunyikan tombol navigasi pada perangkat mobile */
    @media (max-width: 768px) {

        .swiper-button-prev,
        .swiper-button-next {
            display: none;
            /* Menyembunyikan tombol navigasi */
        }
    }
</style>
@endsection