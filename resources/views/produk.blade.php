@extends('layouts.app')

@section('title', 'PT STN | Produk Kami')

@section('content')
    <div class="py-8 bg-gray-100">
        <div class="w-full md:w-11/12 lg:w-9/12 mx-auto">
            <!-- Section Title -->
            <div class="text-center mb-4 bg-white p-6 rounded-lg shadow-sm">
                <h1 class="text-4xl font-bold text-gray-800">Produk Kami "Backgorund di IG"</h1>
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


            <!-- Product Grid Wrapper -->
            <div class="bg-white shadow-sm p-6 sm:p-8 rounded-lg">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <!-- Product Item -->
                    <div
                        class="bg-white p-6 shadow-md rounded-lg border border-gray-200 transition-transform duration-300 ease-in-out hover:scale-105">
                        <img src="/img/product-3.png" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Produk 1</h3>
                        <hr class="border-t-2 border-gray-100 my-2">
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Deskripsi singkat tentang produk ini yang
                            menjelaskan fitur dan manfaatnya.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-green-600">Rp 250,000</span>
                            <a href="#" class="inline-block text-green-500 font-semibold hover:underline">Lihat
                                Detail</a>
                        </div>
                    </div>
                    <!-- Product Item -->
                    <div
                        class="bg-white p-6 shadow-md rounded-lg border border-gray-200 transition-transform duration-300 ease-in-out hover:scale-105">
                        <img src="/img/product-3.png" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Produk 1</h3>
                        <hr class="border-t-2 border-gray-100 my-2">
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Deskripsi singkat tentang produk ini yang
                            menjelaskan fitur dan manfaatnya.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-green-600">Rp 250,000</span>
                            <a href="#" class="inline-block text-green-500 font-semibold hover:underline">Lihat
                                Detail</a>
                        </div>
                    </div>
                    <!-- Product Item -->
                    <div
                        class="bg-white p-6 shadow-md rounded-lg border border-gray-200 transition-transform duration-300 ease-in-out hover:scale-105">
                        <img src="/img/product-3.png" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Produk 1</h3>
                        <hr class="border-t-2 border-gray-100 my-2">
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Deskripsi singkat tentang produk ini yang
                            menjelaskan fitur dan manfaatnya.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-green-600">Rp 250,000</span>
                            <a href="#" class="inline-block text-green-500 font-semibold hover:underline">Lihat
                                Detail</a>
                        </div>
                    </div>
                    <!-- Product Item -->
                    <div
                        class="bg-white p-6 shadow-md rounded-lg border border-gray-200 transition-transform duration-300 ease-in-out hover:scale-105">
                        <img src="/img/product-3.png" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Produk 1</h3>
                        <hr class="border-t-2 border-gray-100 my-2">
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Deskripsi singkat tentang produk ini yang
                            menjelaskan fitur dan manfaatnya.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-green-600">Rp 250,000</span>
                            <a href="#" class="inline-block text-green-500 font-semibold hover:underline">Lihat
                                Detail</a>
                        </div>
                    </div>
                    <!-- Product Item -->
                    <div
                        class="bg-white p-6 shadow-md rounded-lg border border-gray-200 transition-transform duration-300 ease-in-out hover:scale-105">
                        <img src="/img/product-3.png" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Produk 1</h3>
                        <hr class="border-t-2 border-gray-100 my-2">
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Deskripsi singkat tentang produk ini yang
                            menjelaskan fitur dan manfaatnya.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-green-600">Rp 250,000</span>
                            <a href="#" class="inline-block text-green-500 font-semibold hover:underline">Lihat
                                Detail</a>
                        </div>
                    </div>
                    <!-- Product Item -->
                    <div
                        class="bg-white p-6 shadow-md rounded-lg border border-gray-200 transition-transform duration-300 ease-in-out hover:scale-105">
                        <img src="/img/product-3.png" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Produk 1</h3>
                        <hr class="border-t-2 border-gray-100 my-2">
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Deskripsi singkat tentang produk ini yang
                            menjelaskan fitur dan manfaatnya.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-green-600">Rp 250,000</span>
                            <a href="#" class="inline-block text-green-500 font-semibold hover:underline">Lihat
                                Detail</a>
                        </div>
                    </div>
                    <!-- Product Item -->
                    <div
                        class="bg-white p-6 shadow-md rounded-lg border border-gray-200 transition-transform duration-300 ease-in-out hover:scale-105">
                        <img src="/img/product-3.png" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Produk 1</h3>
                        <hr class="border-t-2 border-gray-100 my-2">
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Deskripsi singkat tentang produk ini yang
                            menjelaskan fitur dan manfaatnya.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-green-600">Rp 250,000</span>
                            <a href="#" class="inline-block text-green-500 font-semibold hover:underline">Lihat
                                Detail</a>
                        </div>
                    </div>
                    <!-- Product Item -->
                    <div
                        class="bg-white p-6 shadow-md rounded-lg border border-gray-200 transition-transform duration-300 ease-in-out hover:scale-105">
                        <img src="/img/product-3.png" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Produk 1</h3>
                        <hr class="border-t-2 border-gray-100 my-2">
                        <p class="text-gray-600 mb-4 text-sm sm:text-base">Deskripsi singkat tentang produk ini yang
                            menjelaskan fitur dan manfaatnya.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-green-600">Rp 250,000</span>
                            <a href="#" class="inline-block text-green-500 font-semibold hover:underline">Lihat
                                Detail</a>
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
