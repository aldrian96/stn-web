<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Company Profile')</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="/img/logo.png">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Notification Bar -->
    <div class="bg-green-600 text-white py-2">
        <div class="w-11/12 md:w-9/12 mx-auto text-center">
            <p class="text-sm md:text-base">
                📢 Jangan lewatkan event kami yang akan datang pada <strong>20 Agustus 2024!</strong>! <a href="#event"
                    class="underline hover:text-gray-200">Pelajari lebih lanjut</a>
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

                    <a href="{{ route('about') }}"
                        class="relative group py-2 {{ Route::currentRouteName() == 'about' ? 'text-green-600' : 'text-gray-700' }}">
                        <span class="hover:text-green-600 transition duration-300">Tentang Kami</span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ Route::currentRouteName() == 'about' ? 'scale-x-100' : '' }}"></span>
                    </a>


                    <!-- Dropdown Scroll -->
                    {{-- <div class="relative group py-2">
                        <button class="flex items-center hover:text-green-600 transition duration-300 {{ Route::currentRouteName() == 'produk' ? 'text-green-600' : 'text-gray-700' }}">
                            <span>Produk</span>
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Main Dropdown -->
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 transform scale-y-0 group-hover:opacity-100 group-hover:scale-y-100 transition-all duration-300 origin-top">
                            <div class="py-1">
                                <!-- Submenu -->
                                <div class="relative px-4 py-2 hover:bg-gray-100 group/sub">
                                    <span class="block text-sm text-gray-700 flex items-center justify-between">
                                        Incernato
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                    <!-- Submenu Dropdown -->
                                    <div class="absolute left-full top-0 mt-0 w-48 bg-white rounded-md shadow-lg opacity-0 transform scale-y-0 group-hover/sub:opacity-100 group-hover/sub:scale-y-100 transition-all duration-300 origin-top-left">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Prod1</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Prod2</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Prod3</a>
                                    </div>
                                </div>
                                <div class="relative px-4 py-2 hover:bg-gray-100 group/sub">
                                    <span class="block text-sm text-gray-700 flex items-center justify-between">
                                        Jasa
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                    <div class="absolute left-full top-0 mt-0 w-48 bg-white rounded-md shadow-lg opacity-0 transform scale-y-0 group-hover/sub:opacity-100 group-hover/sub:scale-y-100 transition-all duration-300 origin-top-left">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jasa1</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jasa2</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jasa3</a>
                                    </div>
                                </div>
                                <div class="relative px-4 py-2 hover:bg-gray-100 group/sub">
                                    <span class="block text-sm text-gray-700 flex items-center justify-between">
                                        Kontraktor
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                    <div class="absolute left-full top-0 mt-0 w-48 bg-white rounded-md shadow-lg opacity-0 transform scale-y-0 group-hover/sub:opacity-100 group-hover/sub:scale-y-100 transition-all duration-300 origin-top-left">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kont1</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kont2</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kont3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bottom border animation -->
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ Route::currentRouteName() == 'produk' ? 'scale-x-100' : '' }}"></span>
                    </div> --}}

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
                                <!-- Submenu for Incernato -->
                                <div class="relative px-4 py-2 hover:bg-gray-100 group/sub">
                                    <button id="submenu-incernato" class="w-full text-left flex items-center justify-between">
                                        <span class="block text-sm text-gray-700">Incernato</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                    
                                    <!-- Submenu Dropdown for Incernato -->
                                    <div id="submenu-incernato-menu" class="hidden md:absolute left-full top-0 mt-0 w-48 bg-white rounded-md shadow-lg opacity-0 transform scale-y-0 group-hover/sub:opacity-100 group-hover/sub:scale-y-100 transition-all duration-300 origin-top-left md:group-hover:block">
                                        <a href="{{ route('produk') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Prod1</a>
                                        <a href="{{ route('produk') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Prod2</a>
                                        <a href="{{ route('produk') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Prod3</a>
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
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jasa1</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jasa2</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jasa3</a>
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
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kont1</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kont2</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kont3</a>
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

                    <a href="{{ route('artikel') }}"
                        class="relative group py-2 {{ Route::currentRouteName() == 'artikel' ? 'text-green-600' : 'text-gray-700' }}">
                        <span class="hover:text-green-600 transition duration-300">Artikel</span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ Route::currentRouteName() == 'artikel' ? 'scale-x-100' : '' }}"></span>
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
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta iusto at culpa numquam veritatis! A,
                    reprehenderit? Eos dignissimos corporis perferendis? Facere aspernatur repellendus facilis molestias
                    unde, esse possimus doloremque repellat.
                </p>
            </div>

            <!-- Quick Links Section -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Quick Links</h3>
                <ul class="text-gray-400 text-sm space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:text-blue-400">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-blue-400">Tentang Kami</a></li>
                    <li><a href="{{ route('produk') }}" class="hover:text-blue-400">Produk</a></li>
                    <li><a href="{{ route('sertifikat') }}" class="hover:text-blue-400">Sertifikat</a></li>
                    <li><a href="{{ route('artikel') }}" class="hover:text-blue-400">Artikel</a></li>
                    <li><a href="{{ route('kontak') }}" class="hover:text-blue-400">Hubungi Kami</a></li>
                </ul>
            </div>

            <!-- Services Section -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Produk Kami</h3>
                <ul class="text-gray-400 text-sm space-y-2">
                    <li><a href="#service1" class="hover:text-blue-400">Produk 1</a></li>
                    <li><a href="#service2" class="hover:text-blue-400">Produk 2</a></li>
                    <li><a href="#service3" class="hover:text-blue-400">Produk 3</a></li>
                    <li><a href="#service4" class="hover:text-blue-400">Produk 4</a></li>
                </ul>
            </div>

            <!-- Contact Info Section -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Info Kontak</h3>
                <ul class="text-gray-400 text-sm space-y-2">
                    <li>
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>123 Street, Jakarta, Indonesia</span>
                    </li>
                    <li>
                        <i class="fas fa-phone mr-2"></i>
                        <span>(+62) 812 3456 7890</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope mr-2"></i>
                        <span>info@company.com</span>
                    </li>
                </ul>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="fa-brands fa-linkedin-in w-6 h-6 text-white hover:text-blue-400"
                        target="_blank"></a>
                    <a href="#" class="fa-brands fa-facebook-f w-6 h-6 text-white hover:text-blue-400"
                        target="_blank"></a>
                    <a href="#" class="fa-brands fa-twitter w-6 h-6 text-white hover:text-blue-400"
                        target="_blank"></a>
                    <a href="#" class="fa-brands fa-instagram w-6 h-6 text-white hover:text-blue-400"
                        target="_blank"></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom mt-8 text-center text-gray-500 text-sm">
            &copy; 2024 Company Name. All rights reserved.
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

        // Toggle submenu Incernato
        document.getElementById('submenu-incernato').addEventListener('click', function() {
            const submenu = document.getElementById('submenu-incernato-menu');
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
