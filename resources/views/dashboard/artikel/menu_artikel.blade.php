@extends('layouts.dashboard')

@section('content')
@if (session('message'))
<div class="alert alert-info">
    <h1> {{ session('message') }}</h1>
</div>
@endif

<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Permintaan Brosur</h2>

        <!-- Button Buat Artikel -->
        <a href="{{ route('dashboard.artikel.crud.create_artikel') }}" class="flex items-center text-white bg-blue-600 py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
            <i class="fas fa-plus fa-lg mr-2"></i>
            <span>Buat Artikel</span>
        </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead>
                <tr class="border-b bg-gray-50 text-gray-600">
                    <th class="px-6 py-3 text-left">#</th>
                    <th class="px-6 py-3 text-left">Judul</th>
                    <th class="px-6 py-3 text-left">Penulis</th>
                    <th class="px-6 py-3 text-left text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <input type="hidden" name="" value={{ $i=0}}>
                @foreach ($data as $item)
                <tr class="border-b">
                    <td class="px-6 py-4">{{++$i}}</td>
                    <td class="px-6 py-4">{{$item['title']}}</td>
                    <td class="px-6 py-4">{{$item['author']}}</td>
                    <td class="px-6 py-4">{{ \App\Helpers\Helper::format_created_at($item['created_at']) }}</td>
                    <td class="px-6 py-4 flex justify-center">
                        <a href="{{ route('dashboard.artikel.crud.detail_artikel', ['id' => $item['id']]) }}" class="bg-indigo-600 text-white px-2 py-1 rounded-lg hover:bg-indigo-700 transition duration-300">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('dashboard.artikel.crud.edit_artikel') }}" class="bg-yellow-600 text-white px-2 py-1 rounded-lg ml-4 hover:bg-yellow-700 transition duration-300">
                            <i class="fas fa-edit"></i>
                        </a>
                        <!-- Delete Button -->
                        <button class="bg-red-600 text-white px-2 py-1 rounded-lg ml-4 hover:bg-red-700 transition duration-300" onclick="confirmDelete({{ $item['id'] }})">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({ 
            title: 'Apakah Anda yakin?',
            text: 'Artikel ini akan dihapus secara permanen!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to the delete route
                window.location.href = `/dashboard/artikel/delete/${id}`; // Adjust the URL path as needed
            }
        });
    }
</script>
@endsection