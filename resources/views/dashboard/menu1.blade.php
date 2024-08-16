@extends('layouts.dashboard')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-4">Menu 1 - Data Table</h2>
    
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
                    <th class="px-6 py-3 text-left">No Telp</th>
                    <th class="px-6 py-3 text-left">Nama</th>
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left">Berkas Kualifikasi</th>
                    <th class="px-6 py-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr class="border-b">
                    <td class="px-6 py-4">08123456789</td>
                    <td class="px-6 py-4">John Doe</td>
                    <td class="px-6 py-4">john@example.com</td>
                    <td class="px-6 py-4"><a href="#" class="text-green-600 hover:underline">Unduh Berkas</a></td>
                    <td class="px-6 py-4">
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">Terima</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
@endsection
