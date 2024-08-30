@extends('layouts.app')

@section('title', 'PT STN | Sertifikat')

@section('content')

<div class="py-12 bg-gradient-to-b from-gray-100 to-gray-200">
    <div class="w-11/12 lg:w-9/12 mx-auto pb-8">
        <div class="bg-white py-16 rounded-2xl shadow-lg transition-all duration-300 hover:shadow-xl">
            <div class="text-center max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="mt-2 text-4xl leading-tight font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                    Sertifikat Kami
                </h1>
                <p class="mt-6 max-w-2xl text-xl text-gray-600 mx-auto">
                    Komitmen kami terhadap kualitas dan keunggulan tercermin dalam sertifikat yang kami peroleh.
                </p>
            </div>
        </div>
    </div>

    <div class="w-11/12 lg:w-9/12 mx-auto">
        <div class="bg-white p-8 rounded-2xl shadow-lg transition-all duration-300 hover:shadow-xl">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            {{-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Gambar
                            </th> --}}
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                No Permohonan
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Jenis Permohonan
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Judul
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tanggal
                            </th>
                            {{-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Aksi
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4">
                                IDS000006302
                            </td>
                            <td class="px-6 py-4">
                                PATEN
                            </td>
                            <td class="px-6 py-4 text-gray-600">
                                INSINERATOR UNTUK MEMBAKAR SAMPAH
                                DOMESTIK DENGAN PENAMBAHAN SUSUNAN
                                RONGGA UDARA BATA API DAN JARINGAN PIPA
                                SIRKULASI AIR PADA PONDASI BANGUNAN
                                INSINERATOR SEBAGAI SUMBER OKSIGEN (𝑂2)
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                29 Januari 2024
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">
                                EC00201993330
                            </td>
                            <td class="px-6 py-4">
                                PATEN
                            </td>
                            <td class="px-6 py-4 text-gray-600">
                                MESIN PENGOLAH SAMPAH PORTABEL
                                MULTIGUNA DENGAN TEKNIK TERMOCONTROL
                                DAN TERMOCOPLE
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                29 Januari 2024
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">
                                P00202211218
                            </td>
                            <td class="px-6 py-4">
                                PATEN
                            </td>
                            <td class="px-6 py-4 text-gray-600">
                                ALAT PEMBAKAR SAMPAH BERGERAK NON
                                ORGANIK DENGAN TUNGKU PEMBAKARAN
                                BEROTASI YANG DILENGKAPI NEIS BURNER DAN
                                PENGUMPAN SAMPAH OTOMATIS
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                31 Oktober 2022
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">
                                P00202212168
                            </td>
                            <td class="px-6 py-4">
                                PATEN
                            </td>
                            <td class="px-6 py-4 text-gray-600">
                                REAKTOR BIO TERMAL KONVERSI ENERGI
                                TERBARUKAN
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                12 Oktober 2022
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                <nav class="flex items-center justify-between">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Previous
                        </a>
                        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Next
                        </a>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">6</span>
                                of
                                <span class="font-medium">12</span>
                                results
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a href="#" aria-current="page" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    1
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    2
                                </a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection