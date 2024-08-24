@extends('layouts.app')

@section('title', 'PT STN | Kontak Kami')

@section('content')
<div class="py-12 bg-gray-100">
    <div class="w-full md:w-11/12 lg:w-9/12 mx-auto">
        <!-- Section Title -->
        <div class="text-center mb-8 bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-4xl font-extrabold text-gray-800">
                Hubungi Kami
            </h1>
            <div class="w-24 h-1 bg-green-500 mx-auto mt-4"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut tentang layanan kami, jangan ragu untuk menghubungi kami melalui formulir di bawah ini atau kunjungi lokasi kami di peta yang tersedia.
            </p>
                <div class="flex justify-center space-x-6 my-6">
                    <a href="https://www.instagram.com/yourusername" target="_blank" class="text-gray-600 hover:text-gray-900">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/yourcompany" target="_blank" class="text-gray-600 hover:text-gray-900">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a href="https://www.facebook.com/yourcompany" target="_blank" class="text-gray-600 hover:text-gray-900">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://wa.me/yourphonenumber" target="_blank" class="text-gray-600 hover:text-gray-900">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                    <a href="https://twitter.com/yourusername" target="_blank" class="text-gray-600 hover:text-gray-900">
                        <i class="fab fa-youtube fa-2x"></i>
                    </a>
                </div>
        </div>

        <!-- Form Input -->
        <div class="bg-white p-8 shadow-lg rounded-lg transition duration-300 ease-in-out hover:shadow-xl mb-8">
            <form>
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Nama:</label>
                    <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Masukkan nama Anda">
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
                    <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Masukkan email Anda">
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan:</label>
                    <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Tulis pesan Anda"></textarea>
                </div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 w-full text-white font-bold py-3 px-6 border border-transparent rounded-full transition duration-300 ease-in-out">
                    Kirim Pesan
                </button>
            </form>
        </div>

        <!-- Maps -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Map 1 -->
            <div class="relative h-80 rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out hover:shadow-xl">
                <iframe class="w-full h-full border-none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126877.22866386898!2d107.1645576!3d-6.3144784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699bfdfe53c2bb%3A0xd4f5ed1486bda164!2sPT.+SARANA+TUNAS+NIAGA!5e0!3m2!1sen!2sid!4v1699556147967!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <!-- Map 2 -->
            <div class="relative h-80 rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out hover:shadow-xl">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.8805276340136!2d107.5608046!3d-7.0233271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ed004ea960ed%3A0x32750fc38ae92b7a!2sIncinerator%20centre!5e0!3m2!1sid!2sid!4v1724399908640!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
