<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Company Profile')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Notification Bar -->
    <div class="bg-green-600 text-white py-2">
        <div class="w-11/12 md:w-9/12 mx-auto text-center">
            <p class="text-sm md:text-base">
                📢 Don't miss our upcoming event on <strong>August 20th, 2024</strong>! <a href="#event"
                    class="underline hover:text-gray-200">Learn More</a>
            </p>
        </div>
    </div>
    <header class="z-50 sticky top-0 bg-white py-5">
        <nav class="w-11/12 md:w-9/12 mx-auto">
            <div class="flex items-center justify-between md:hidden">
                <div class="uppercase text-lg">
                    <a href="/" class="flex items-center">
                        <img src="/img/logo.png" alt="" class="h-10 w-auto object-contain mr-3">
                    </a>
                </div>
                <button onclick="toggleMenu()"
                    class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
                    </svg>
                </button>
            </div>
            <div class="hidden md:flex flex-col md:flex-row items-center justify-between" id="mobile-menu">
                <!-- logo -->
                <div class="uppercase text-lg mb-4 md:mb-0 hidden md:block">
                    <a href="/" class="flex items-center">
                        <img src="/img/logo.png" alt="" class="h-10 w-auto object-contain mr-3">
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

                    <a href="{{ route('produk') }}"
                        class="relative group py-2 {{ Route::currentRouteName() == 'produk' ? 'text-green-600' : 'text-gray-700' }}">
                        <span class="hover:text-green-600 transition duration-300">Produk</span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ Route::currentRouteName() == 'produk' ? 'scale-x-100' : '' }}"></span>
                    </a>

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

                <button
                    class="w-full md:w-auto bg-white text-green-600 font-semibold py-2 px-4 border border-green-600 rounded hover:bg-green-600 hover:text-white transition duration-300 ease-in-out transform hover:scale-105 flex items-center">
                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Minta Brosur
                </button>
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
                <h3 class="text-lg font-semibold">About Us</h3>
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
                    <li><a href="#home" class="hover:text-blue-400">Home</a></li>
                    <li><a href="#about" class="hover:text-blue-400">Tentang Kami</a></li>
                    <li><a href="#services" class="hover:text-blue-400">Produk</a></li>
                    <li><a href="#contact" class="hover:text-blue-400">Sertifikat</a></li>
                </ul>
            </div>

            <!-- Services Section -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Our Services</h3>
                <ul class="text-gray-400 text-sm space-y-2">
                    <li><a href="#service1" class="hover:text-blue-400">Service 1</a></li>
                    <li><a href="#service2" class="hover:text-blue-400">Service 2</a></li>
                    <li><a href="#service3" class="hover:text-blue-400">Service 3</a></li>
                    <li><a href="#service4" class="hover:text-blue-400">Service 4</a></li>
                </ul>
            </div>

            <!-- Contact Info Section -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Contact Info</h3>
                <ul class="text-gray-400 text-sm space-y-2">
                    <li><span class="text-blue-400">Address:</span> 123 Environmental Lane, Green City</li>
                    <li><span class="text-blue-400">Phone:</span> (123) 456-7890</li>
                    <li><span class="text-blue-400">Email:</span> info@environment.com</li>
                    <li class="flex space-x-4 mt-4">
                        <a href="#"><img class="w-6 h-6" src="/img/Instagram.svg" alt="Instagram" /></a>
                        <a href="#"><img class="w-6 h-6" src="/img/Github.svg" alt="GitHub" /></a>
                        <a href="#"><img class="w-6 h-6" src="/img/Twitter.svg" alt="Twitter" /></a>
                        <a href="#"><img class="w-6 h-6" src="/img/Linkedin.svg" alt="LinkedIn" /></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-700 mt-8 pt-4 text-center text-sm text-gray-400">
            &copy; 2024 PT Sarana Tunas Niaga. All rights reserved.
        </div>
    </footer>




    @vite('resources/js/app.js')

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>

</html>
