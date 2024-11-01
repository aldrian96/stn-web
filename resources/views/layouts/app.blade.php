<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Company Profile')</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="/img/logo.png">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Notification Bar -->
    <div class="bg-gradient-to-r from-blue-900 to-blue-400 text-white py-2">
        <div class="w-11/12 md:w-9/12 mx-auto text-center">
            <p class="text-sm md:text-base">
                Selamat datang di Website resmi PT. Sarana Tunas Niaga
                <a href="{{ route('about') }}" class="underline hover:text-gray-200">Pelajari lebih lanjut</a>
            </p>
        </div>
    </div>


    <header class="z-50 sticky top-0 bg-white py-5">
        <nav class="w-11/12 md:w-9/12 mx-auto">
            <div class="flex items-center justify-between md:hidden">
                <div class="uppercase text-lg">
                    <a href="/" class="flex items-center">
                        <img src="/img/logo.png" alt="Logo" class="h-10 w-auto object-contain mr-3">
                    </a>
                </div>
                <button onclick="toggleMenu()"
                    class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                    <i class="fas fa-bars h-6 w-6"></i>
                </button>
            </div>
            <div class="hidden md:flex flex-col md:flex-row items-center justify-between" id="mobile-menu">
                <!-- Logo -->
                <div class="uppercase text-lg mb-4 md:mb-0 hidden md:block">
                    <a href="/" class="flex items-center">
                        <img src="/img/logo.png" alt="Logo" class="h-10 w-auto object-contain mr-3">
                    </a>
                </div>
                <!-- Link Menu Navbar -->
                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 mb-4 md:mb-0">
                    <a href="{{ route('home') }}"
                        class="relative group py-2 {{ Route::currentRouteName() == 'home' ? 'text-green-600' : 'text-gray-700' }}">
                        <span class="hover:text-green-600 transition duration-300">Home</span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ Route::currentRouteName() == 'home' ? 'scale-x-100' : '' }}"></span>
                    </a>

                    <a href="{{ route('artikel') }}"
                        class="relative group py-2 {{ Route::currentRouteName() == 'artikel' ? 'text-green-600' : 'text-gray-700' }}">
                        <span class="hover:text-green-600 transition duration-300">Artikel</span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ Route::currentRouteName() == 'artikel' ? 'scale-x-100' : '' }}"></span>
                    </a>

                    <!-- Dropdown Numpuk -->
                    <div class="relative group py-2">
                        <button id="produk-btn" class="flex items-center justify-between w-full hover:text-green-600 transition duration-300 text-gray-700 md:w-auto md:inline-flex">
                            <span>Produk</span>
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Main Dropdown -->
                        <div id="produk-menu" class="hidden md:absolute left-0 mt-2 w-48 bg-white rounded-md opacity-0 transform scale-y-0 group-hover:opacity-100 group-hover:scale-y-100 transition-all duration-300 origin-top md:group-hover:block">
                            <div class="py-1">
                                <!-- Submenu for incinerator -->
                                <div class="relative px-4 py-2 hover:bg-gray-100 group/sub">
                                    <button id="submenu-incinerator" class="w-full text-left flex items-center justify-between">
                                        <span class="block text-sm text-gray-700">Incinerator</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>

                                    <!-- Submenu Dropdown for incinerator -->
                                    <div id="submenu-incinerator-menu" class="hidden md:absolute left-full top-0 mt-0 w-48 bg-white rounded-md shadow-lg opacity-0 transform scale-y-0 group-hover/sub:opacity-100 group-hover/sub:scale-y-100 transition-all duration-300 origin-top-left md:group-hover:block">
                                        <a href="{{ route('incinerator', ['id' => 0]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">AG 50</a>
                                        <a href="{{ route('incinerator', ['id' => 1]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">AG 100</a>
                                        <a href="{{ route('incinerator', ['id' => 2]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">AG 300</a>
                                    </div>
                                </div>

                                <!-- Submenu for Jasa -->
                                <div class="relative px-4 py-2 hover:bg-gray-100 group/sub">
                                    <button id="submenu-jasa" class="w-full text-left flex items-center justify-between">
                                        <span class="block text-sm text-gray-700">Jasa</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>

                                    <!-- Submenu Dropdown for Jasa -->
                                    <div id="submenu-jasa-menu" class="hidden md:absolute left-full top-0 mt-0 w-48 bg-white rounded-md shadow-lg opacity-0 transform scale-y-0 group-hover/sub:opacity-100 group-hover/sub:scale-y-100 transition-all duration-300 origin-top-left md:group-hover:block">
                                        <a href="{{ route('jasa', ['id' => 0]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">OS. Security</a>
                                        <a href="{{ route('jasa', ['id' => 1]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">OS. Cleaning Service</a>
                                        <a href="{{ route('jasa', ['id' => 2]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">OS. Driver</a>
                                        <a href="{{ route('jasa', ['id' => 3]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">OS. Special Worker</a>
                                    </div>
                                </div>

                                <!-- Submenu for Kontraktor -->
                                <div class="relative px-4 py-2 hover:bg-gray-100 group/sub">
                                    <button id="submenu-kontraktor" class="w-full text-left flex items-center justify-between">
                                        <span class="block text-sm text-gray-700">Kontraktor</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>

                                    <!-- Submenu Dropdown for Kontraktor -->
                                    <div id="submenu-kontraktor-menu" class="hidden md:absolute left-full top-0 mt-0 w-48 bg-white rounded-md shadow-lg opacity-0 transform scale-y-0 group-hover/sub:opacity-100 group-hover/sub:scale-y-100 transition-all duration-300 origin-top-left md:group-hover:block">
                                        <a href="{{ route('kontraktor', ['id' => 0]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Civil</a>
                                        <a href="{{ route('kontraktor', ['id' => 1]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mechanical Electrical</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom border animation -->
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>

                    <a href="{{ route('sertifikat') }}"
                        class="relative group py-2 {{ Route::currentRouteName() == 'sertifikat' ? 'text-green-600' : 'text-gray-700' }}">
                        <span class="hover:text-green-600 transition duration-300">Sertifikat</span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ Route::currentRouteName() == 'sertifikat' ? 'scale-x-100' : '' }}"></span>
                    </a>

                    <a href="{{ route('about') }}"
                        class="relative group py-2 {{ Route::currentRouteName() == 'about' ? 'text-green-600' : 'text-gray-700' }}">
                        <span class="hover:text-green-600 transition duration-300">Tentang Kami</span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ Route::currentRouteName() == 'about' ? 'scale-x-100' : '' }}"></span>
                    </a>

                    <a href="{{ route('kontak') }}"
                        class="relative group py-2 {{ Route::currentRouteName() == 'kontak' ? 'text-green-600' : 'text-gray-700' }}">
                        <span class="hover:text-green-600 transition duration-300">Hubungi Kami</span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ Route::currentRouteName() == 'kontak' ? 'scale-x-100' : '' }}"></span>
                    </a>
                </div>

                <a href="{{ route('brosur') }}"
                    class="w-full md:w-auto bg-white text-green-600 font-semibold py-2 px-4 border border-green-600 rounded hover:bg-green-600 hover:text-white transition duration-300 ease-in-out transform hover:scale-105 flex items-center">
                    <i class="fas fa-file-download mr-2"></i>
                    Minta Brosur
                </a>
            </div>
        </nav>
    </header>

    <div id="home" class="md:mt-0">
        @yield('content')
    </div>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="w-10/12 md:w-9/12 mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- About Us Section -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Tentang Kami</h3>
                <p class="text-gray-400 text-sm">
                    AG Incinerator, hasil riset berkelanjutan dan dukungan berbagai pihak, dipatenkan sebagai karya anak bangsa, hadir dalam tipe beragam untuk mengurangi beban TPA, didukung masyarakat, pemerintah, dan dunia usaha dalam pengembangannya.
                </p>
            </div>

            <!-- Quick Links Section -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Quick Links</h3>
                <ul class="text-gray-400 text-sm space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:text-blue-400">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-blue-400">Tentang Kami</a></li>
                    {{-- <li><a href="#" class="hover:text-blue-400">Produk</a></li> --}}
                    <li><a href="{{ route('sertifikat') }}" class="hover:text-blue-400">Sertifikat</a></li>
                    <li><a href="{{ route('artikel') }}" class="hover:text-blue-400">Artikel</a></li>
                    <li><a href="{{ route('kontak') }}" class="hover:text-blue-400">Hubungi Kami</a></li>
                </ul>
            </div>

            <!-- Services Section -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Produk Kami</h3>
                <ul class="text-gray-400 text-sm space-y-2">
                    <li><a href="{{ route('incinerator', ['id' => 0]) }}" class="hover:text-blue-400">Incinerator AG 50</a></li>
                    <li><a href="{{ route('incinerator', ['id' => 1]) }}" class="hover:text-blue-400">Incinerator AG 100</a></li>
                    <li><a href="{{ route('incinerator', ['id' => 2]) }}" class="hover:text-blue-400">Incinerator AG 300</a></li>
                </ul>
            </div>

            <!-- Contact Info Section -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Info Kontak</h3>
                <ul class="text-gray-400 text-sm space-y-2">
                    <!-- Alamat 1 -->
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt mr-2 text-gray-600"></i>
                        <span class="truncate w-64 lg:w-96 block">Jl. Junti Girang No.131, Bojongkunci, Kec. Pameungpeuk, Kabupaten Bandung, Jawa Barat 40376</span>
                    </li>
                    <!-- Alamat 2 -->
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt mr-2 text-gray-600"></i>
                        <span class="truncate w-64 lg:w-96 block">Jl. Beruang III, Jayamukti, Kec. Cikarang Pusat, Kabupaten Bekasi, Jawa Barat 17530</span>
                    </li>
                    <!-- Telepon 1 -->
                    <li class="flex items-center">
                        <i class="fas fa-phone mr-2 text-gray-600"></i>
                        <span>(+62)812-990-3131</span>
                    </li>
                    <!-- Email -->
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-2 text-gray-600"></i>
                        <span class="truncate w-64 lg:w-96 block">saranatunasniaga@gmail.com</span>
                    </li>
                </ul>
                <!-- Ikon Media Sosial -->
                <div class="flex space-x-4 mt-4">
                    <a href="https://www.instagram.com/yourusername" class="fab fa-instagram w-6 h-6 text-white hover:text-blue-400" target="_blank" aria-label="Instagram"></a>
                    <a href="https://www.linkedin.com/company/yourcompany" class="fab fa-linkedin w-6 h-6 text-white hover:text-blue-400" target="_blank" aria-label="LinkedIn"></a>
                    <a href="https://www.facebook.com/yourcompany" class="fab fa-facebook-f w-6 h-6 text-white hover:text-blue-400" target="_blank" aria-label="Facebook"></a>
                    <a href="https://wa.me/628129903131" class="fab fa-whatsapp w-6 h-6 text-white hover:text-blue-400" target="_blank" aria-label="WhatsApp"></a>
                    <a href="https://www.youtube.com/channel/yourchannel" class="fab fa-youtube w-6 h-6 text-white hover:text-blue-400" target="_blank" aria-label="YouTube"></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom mt-8 text-center text-gray-500 text-sm">
            &copy; 2024 PT. Sarana Tunas Niaga. All rights reserved.
        </div>
    </footer>

    <script>
        function toggleMenu() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
        // Toggle main dropdown menu
        document.getElementById('produk-btn').addEventListener('click', function() {
            const menu = document.getElementById('produk-menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('opacity-100');
            menu.classList.toggle('scale-y-100');
        });

        // Toggle submenu incinerator
        document.getElementById('submenu-incinerator').addEventListener('click', function() {
            const submenu = document.getElementById('submenu-incinerator-menu');
            submenu.classList.toggle('hidden');
            submenu.classList.toggle('opacity-100');
            submenu.classList.toggle('scale-y-100');
        });

        // Toggle submenu Jasa
        document.getElementById('submenu-jasa').addEventListener('click', function() {
            const submenu = document.getElementById('submenu-jasa-menu');
            submenu.classList.toggle('hidden');
            submenu.classList.toggle('opacity-100');
            submenu.classList.toggle('scale-y-100');
        });

        // Toggle submenu Kontraktor
        document.getElementById('submenu-kontraktor').addEventListener('click', function() {
            const submenu = document.getElementById('submenu-kontraktor-menu');
            submenu.classList.toggle('hidden');
            submenu.classList.toggle('opacity-100');
            submenu.classList.toggle('scale-y-100');
        });
    </script>
</body>

</html>