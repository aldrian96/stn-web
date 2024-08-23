@extends('layouts.dashboard')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-4">Buat Artikel Baru</h2>

    <!-- Form Create Artikel -->
    <form method="POST" enctype="multipart/form-data" action={{route('dashboard.artikel.crud.store_artikel')}}>
        @csrf
        <!-- Input Judul -->
        <div class="mb-4">
            <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Artikel</label>
            <input type="text" id="judul" name="title" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" required>
        </div>
        <!-- Input Penulis -->
        <div class="mb-4">
            <label for="penulis" class="block text-sm font-medium text-gray-700 mb-1">Penulis</label>
            <input type="text" id="penulis" name="author" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" required>
        </div>

        <!-- Upload Gambar -->
        <div class="mb-4">
            <label for="gambar" class="block text-sm font-medium text-gray-700 mb-1">Gambar</label>
            <input type="file" id="gambar" name="gambar" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" accept="image/*">
        </div>

        <!-- Konten Artikel dengan Trix Editor -->
        <div class="mb-4">
            <label for="konten" class="block text-sm font-medium text-gray-700 mb-1">Konten Artikel</label>
            <input id="konten" type="hidden" name="body">
            <trix-editor input="konten" class="trix-content w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500"></trix-editor>
        </div>



        <div class="flex justify-between">
            <!-- Button Kembali -->
            <a href="{{ route('dashboard.artikel.menu_artikel') }}" class="text-gray-700 bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300 transition duration-300">
                <i class="fas fa-arrow-left fa-lg mr-2"></i>
                <span>Kembali</span>
            </a>

            <!-- Button Submit -->
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                <i class="fas fa-save fa-lg mr-2"></i>
                <span>Simpan Artikel</span>
            </button>
        </div>
    </form>
</div>
@endsection