@extends('layouts.app')

@section('title', 'PT STN | Artikel')

@section('content')

<div class="py-12 bg-gradient-to-b from-gray-100 to-gray-200">
    <div class="w-11/12 lg:w-9/12 mx-auto pb-8">
        <div class="bg-white py-16 rounded-2xl shadow-lg transition-all duration-300 hover:shadow-xl">
            <div class="text-center max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="mt-2 text-4xl leading-tight font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                    Artikel Kami
                </h1>
                <p class="mt-6 max-w-2xl text-xl text-gray-600 mx-auto">
                    Dapatkan wawasan terbaru tentang pengelolaan limbah, teknologi ramah lingkungan, dan inovasi terbaru dari kami.
                </p>
            </div>
        </div>
    </div>
    
    <div class="w-11/12 lg:w-9/12 mx-auto">
        <div class="bg-white p-8 rounded-2xl shadow-lg transition-all duration-300 hover:shadow-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 6; $i++)
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x300?text=Artikel+{{ $i }}" alt="Artikel {{ $i }}">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img class="w-10 h-10 rounded-full mr-4" src="https://via.placeholder.com/150" alt="Author avatar">
                            <div>
                                <p class="text-gray-900 font-semibold">John Doe</p>
                                <p class="text-gray-600 text-sm">15 Mei 2024</p>
                            </div>
                        </div>
                        <h3 class="font-bold text-xl mb-2 text-gray-800">Judul Artikel {{ $i }}</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="text-blue-500 hover:text-blue-600 transition-colors duration-300 flex items-center font-semibold">
                            Baca selengkapnya
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                @endfor
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