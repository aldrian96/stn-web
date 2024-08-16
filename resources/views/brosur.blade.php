@extends('layouts.app')

@section('title', 'Minta Brosur - PT. Sarana Tunas Niaga')

@section('content')
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8 mx-4 sm:mx-6 lg:mx-8">
            <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">Minta Brosur</h1>
            
            <form method="POST" action="#">
                @csrf
                
                <!-- Nama Depan -->
                <div class="mb-4">
                    <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2">Nama Depan:</label>
                    <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" placeholder="Masukkan nama depan Anda" required>
                </div>
                
                <!-- Nama Belakang -->
                <div class="mb-4">
                    <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2">Nama Belakang:</label>
                    <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" placeholder="Masukkan nama belakang Anda" required>
                </div>
                
                <!-- Alamat Email Perusahaan -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Alamat Email Perusahaan:</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" placeholder="Masukkan alamat email perusahaan Anda" required>
                </div>
                
                <!-- Nomor Telepon -->
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Nomor Telepon:</label>
                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" placeholder="Masukkan nomor telepon Anda" required>
                </div>
                
                <!-- Submit Button -->
                <div class="mb-6">
                    <button type="submit" class="w-full bg-green-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">Kirim</button>
                </div>
            </form>
        </div>
    </div>
@endsection

