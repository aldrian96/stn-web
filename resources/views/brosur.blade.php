@extends('layouts.app')

@section('title', 'Minta Brosur - PT. Sarana Tunas Niaga')

@section('content')
<div class="bg-gray-100 flex items-center justify-center min-h-screen py-12">
    <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8 mx-4 sm:mx-6 lg:mx-8">
        <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">Minta Brosur</h1>

        <form method="POST" action={{route('request-brochure-store')}}>
            @csrf

            <!-- Nama Depan -->
            <div class="mb-4">
                <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2">Nama Perusahaan:</label>
                <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" placeholder="Masukkan Nama Perusahaan Anda" required>
            </div>

            <!-- Alamat Email Perusahaan -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" name="company_email" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" placeholder="Masukkan alamat email perusahaan Anda" required>
            </div>

            <!-- Nomor Telepon -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Nomor Telepon:</label>
                <input type="tel" id="phone" name="phone_number" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" placeholder="Masukkan nomor telepon Anda" required>
            </div>

            <!-- Alamat -->
            <div class="mb-4">
                <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
                <textarea id="address" name="address" rows="6" cols="50" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" placeholder="Masukkan Alamat Anda" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="mb-6">
                <button type="submit" class="w-full bg-green-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">Kirim</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
</script>
@endsection