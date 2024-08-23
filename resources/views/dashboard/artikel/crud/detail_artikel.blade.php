@extends('layouts.dashboard')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-4">Detail Artikel</h2>

    <!-- Artikel Detail -->
    <div class="mb-4">
        <div class="flex items-center mb-4">
            <!-- Gambar Artikel -->
            <img src="/img/artikel.jpg" alt="Gambar Artikel" class="w-32 h-32 object-cover rounded-lg mr-4">
            <div>
                <!-- Judul Artikel -->
                <h3 class="text-xl font-bold mb-2">{{ $data->title }}</h3>
                <!-- Penulis -->
                <p class="text-sm text-gray-600 mb-1"><strong>Penulis:</strong> {{ $data->author }}</p>
                <!-- Tanggal -->
                <p class="text-sm text-gray-600"><strong>Tanggal:</strong> {{ $data->created_at }}</p>
            </div>
        </div>

        <!-- Konten Artikel -->
        <div class="mb-4">
            <h4 class="text-lg font-semibold mb-2">Konten Artikel</h4>
            <p class="text-gray-700">
                {!! $data->body !!}
            </p>
        </div>

        <!-- Button Kembali -->
        <div class="flex justify-end">
            <a href="{{ route('dashboard.artikel.menu_artikel') }}" class="text-gray-700 bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300 transition duration-300">
                <i class="fas fa-arrow-left fa-lg mr-2"></i>
                <span>Kembali</span>
            </a>
        </div>
    </div>
</div>
@endsection
