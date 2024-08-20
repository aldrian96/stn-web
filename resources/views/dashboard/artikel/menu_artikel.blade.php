@extends('layouts.dashboard')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Permintaan Brosur</h2>
        
        <!-- Button Buat Artikel -->
        <a href="{{ route('dashboard.artikel.crud.create_artikel') }}" class="flex items-center text-white bg-blue-600 py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
            <i class="fas fa-plus fa-lg mr-2"></i>
            <span>Buat Artikel</span>
        </a>
    </div>
    
    <!-- Search and Filter -->
    <div class="mb-4 flex justify-between items-center">
        <input type="text" placeholder="Cari..." class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" />
        <select class="ml-4 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500">
            <option value="">Filter</option>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
        </select>
    </div>
    
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead>
                <tr class="border-b bg-gray-50 text-gray-600">
                    <th class="px-6 py-3 text-left">#</th>
                    <th class="px-6 py-3 text-left">Judul</th>
                    <th class="px-6 py-3 text-left">Penulis</th>
                    <th class="px-6 py-3 text-left">Kategori</th>
                    <th class="px-6 py-3 text-left">Tanggal</th>
                    <th class="px-6 py-3 text-left text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr class="border-b">
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4">Judul Artikel 1</td>
                    <td class="px-6 py-4">Penulis 1</td>
                    <td class="px-6 py-4">Kategori 1</td>
                    <td class="px-6 py-4">20 Aug 2024</td>
                    <td class="px-6 py-4 flex justify-center">
                        <a href="{{ route('dashboard.artikel.crud.detail_artikel') }}" class="bg-indigo-600 text-white px-2 py-1 rounded-lg hover:bg-indigo-700 transition duration-300">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('dashboard.artikel.crud.edit_artikel') }}" class="bg-yellow-600 text-white px-2 py-1 rounded-lg ml-4 hover:bg-yellow-700 transition duration-300">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button class="bg-red-600 text-white px-2 py-1 rounded-lg ml-4 hover:bg-red-700 transition duration-300">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="px-6 py-4">2</td>
                    <td class="px-6 py-4">Judul Artikel 2</td>
                    <td class="px-6 py-4">Penulis 2</td>
                    <td class="px-6 py-4">Kategori 2</td>
                    <td class="px-6 py-4">20 Aug 2024</td>
                    <td class="px-6 py-4 flex justify-center">
                        <button class="bg-indigo-600 text-white px-2 py-1 rounded-lg hover:bg-indigo-700 transition duration-300">
                            <i class="fas fa-eye"></i>
                        </button>
                        <a href="{{ route('dashboard.artikel.crud.edit_artikel') }}" class="bg-yellow-600 text-white px-2 py-1 rounded-lg ml-4 hover:bg-yellow-700 transition duration-300">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button class="bg-red-600 text-white px-2 py-1 rounded-lg ml-4 hover:bg-red-700 transition duration-300">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
