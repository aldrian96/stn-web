@extends('layouts.app')

@section('title', 'PT STN | Produk Kami')

@section('content')
    <div class="py-12 bg-gray-100">
        <div class="w-full md:w-11/12 lg:w-9/12 mx-auto">
            <!-- Section Title -->
            <div class="text-center mb-4 bg-white p-6 rounded-lg shadow-sm">
                <h1 class="text-4xl font-bold text-gray-800">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Produk Kami
                    <i class="fa-solid fa-bag-shopping"></i>
                </h1>
                <div class="w-24 h-1 bg-green-500 mx-auto mt-4"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Temukan berbagai produk unggulan kami yang dirancang untuk memenuhi kebutuhan Anda.
                    Kami berkomitmen untuk memberikan kualitas terbaik dengan berbagai pilihan yang sesuai dengan preferensi
                    Anda.
                </p>
            </div>

            <!-- Search and Filter Section -->
            <div class="bg-white shadow-sm p-4 sm:p-6 rounded-lg mb-4">
                <div class="flex flex-col space-y-4">
                    <!-- Search Input -->
                    <div class="relative w-full">
                        <input type="text" placeholder="Cari produk..."
                            class="w-full px-4 py-2 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    </div>

                    <!-- Filters -->
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <!-- Category Filter -->
                        <div class="relative flex-grow">
                            <select
                                class="w-full px-4 py-2 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none">
                                <option value="">Semua Kategori</option>
                                <option value="kategori1">Kategori 1</option>
                                <option value="kategori2">Kategori 2</option>
                            </select>
                            <i class="fas fa-filter absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                            <i
                                class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        </div>

                        <!-- Sort Filter -->
                        <div class="relative flex-grow">
                            <select
                                class="w-full px-4 py-2 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none">
                                <option value="">Urutkan Berdasarkan</option>
                                <option value="harga_terendah">Harga Terendah</option>
                                <option value="harga_tertinggi">Harga Tertinggi</option>
                                <option value="terbaru">Terbaru</option>
                            </select>
                            <i
                                class="fas fa-sort-amount-down-alt absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                            <i
                                class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product -->
            <div class="bg-white shadow-sm p-6 sm:p-8 rounded-lg">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    {{-- Produk --}}
                    <div
                        class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 hover:shadow-lg">
                        <div class="relative">
                            <img src="/img/product-3.png" alt="Product Name" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                                Sale</div>
                        </div>
                        <hr>

                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Nama Produk</h3>
                            <p class="text-sm text-gray-600 mb-3">Deskripsi singkat produk ini.</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-lg font-bold text-gray-800">Rp 249.000</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">Rp 299.000</span>
                                </div>
                                <button
                                    class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm hover:bg-blue-600 transition-colors">
                                    {{-- <i class="fa-solid fa-cart-shopping"></i> --}}
                                    Beli Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- Produk --}}
                    <div
                        class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 hover:shadow-lg">
                        <div class="relative">
                            <img src="/img/product-3.png" alt="Product Name" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                                Sale</div>
                        </div>
                        <hr>

                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Nama Produk</h3>
                            <p class="text-sm text-gray-600 mb-3">Deskripsi singkat produk ini.</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-lg font-bold text-gray-800">Rp 249.000</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">Rp 299.000</span>
                                </div>
                                <button
                                    class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm hover:bg-blue-600 transition-colors">
                                    {{-- <i class="fa-solid fa-cart-shopping"></i> --}}
                                    Beli Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- Produk --}}
                    <div
                        class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300 hover:shadow-lg">
                        <div class="relative">
                            <img src="/img/product-3.png" alt="Product Name" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                                Sale</div>
                        </div>
                        <hr>

                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Nama Produk</h3>
                            <p class="text-sm text-gray-600 mb-3">Deskripsi singkat produk ini.</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-lg font-bold text-gray-800">Rp 249.000</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">Rp 299.000</span>
                                </div>
                                <button
                                    class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm hover:bg-blue-600 transition-colors">
                                    {{-- <i class="fa-solid fa-cart-shopping"></i> --}}
                                    Beli Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav aria-label="Pagination" class="inline-flex">
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 rounded-l-lg bg-white text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-green-500">
                        Previous
                    </a>
                    <a href="#" aria-current="page"
                        class="px-4 py-2 border-t border-b border-gray-300 bg-green-500 text-white">1</a>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-green-500">2</a>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-green-500">3</a>
                    <span class="px-4 py-2 border border-gray-300 bg-white text-gray-500">...</span>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-green-500">Next</a>
                </nav>
            </div>

        </div>
    </div>
@endsection
