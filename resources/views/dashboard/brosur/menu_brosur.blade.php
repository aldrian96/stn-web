@extends('layouts.dashboard')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-4">Permintaan Brosur</h2>

    <!-- Search and Filter -->
    <div class="mb-4 flex justify-between items-center">
        <input type="text" placeholder="Cari..." class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" />
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead>
                <tr class="border-b bg-gray-50 text-gray-600">
                    <th class="px-6 py-3 text-left">#</th>
                    <th class="px-6 py-3 text-left">No Telp</th>
                    <th class="px-6 py-3 text-left">Nama</th>
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->

                @foreach ($data as $item)
                <tr class="border-b">
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4">{{ $item['phone_number'] }}</td>
                    <td class="px-6 py-4">{{ $item['name'] }}</td>
                    <td class="px-6 py-4">{{ $item['company_email'] }}</td>
                    <td class="px-6 py-4 flex justify-center">
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                            <i class="fas fa-envelope mr-2"></i> Kirim Brosur via Email
                        </button>
                    </td>
                </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
@endsection