@extends('layouts.app')

@section('title', 'PT STN | Kontak Kami')

@section('content')
<div class="py-12 bg-gray-100">
    <div class="w-full md:w-11/12 lg:w-9/12 mx-auto">
        <!-- Section Title -->
        <div class="text-center mb-4 bg-white p-6 rounded-lg shadow-sm">
            <h1 class="text-4xl font-bold text-gray-800">
                Hubungi Kami
            </h1>
            <div class="w-24 h-1 bg-green-500 mx-auto mt-4"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut tentang layanan kami, jangan ragu untuk
                    menghubungi kami melalui formulir di bawah ini atau kunjungi lokasi kami di peta yang tersedia.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- Form Input --}}
            <form class="bg-white p-8 shadow-lg rounded-lg transition duration-300 ease-in-out hover:shadow-xl">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nama:</label>
                    <input type="text" id="name"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Masukkan nama Anda">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="email"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Masukkan email Anda">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Pesan:</label>
                    <textarea id="message" rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Tulis pesan Anda"></textarea>
                </div>
                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 w-full text-white font-bold py-3 px-6 border border-transparent rounded-full transition duration-300 ease-in-out">
                    Kirim Pesan
                </button>
            </form>
    
            <!-- Maps -->
            <div
                class="relative h-100 rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out hover:shadow-xl">
                <iframe class="w-full h-full border-none"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126877.22866386898!2d106.68943106397495!3d-6.229728947582249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14f5c8b6b79%3A0x104f03e9b82357b3!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1622743760341!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
