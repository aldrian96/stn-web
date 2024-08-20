<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/logo.png">

</head>
<body class="bg-gray-200 flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-200 shadow-lg text-gray-800 min-h-full flex flex-col fixed top-0 left-0 z-20 transition-all duration-300">
        <!-- User Info -->
        <div class="p-4 flex-shrink-0">
            @if(auth()->check())
                <div class="flex items-center">
                    <img src="{{ asset('img/profile.jpg') }}" alt="Profile Picture" class="w-12 h-12 rounded-full border-2 border-gray-300 mr-4">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">{{ auth()->user()->name }}</h2>
                        <p class="text-gray-600 text-sm">Administrator</p>
                    </div>
                </div>
            @else
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">James Andriano</h2>
                        <p class="text-gray-600 text-sm">Admin</p>
                    </div>
                </div>
            @endif
        </div>
        <!-- Navigation Links -->
        <div class="flex-1 overflow-y-auto border-t border-gray-300">
            <ul class="mt-6 px-4">
                <li class="mb-2">
                    <a href="{{ route('dashboard.brosur.menu_brosur') }}" class="flex items-center text-gray-700 hover:bg-gray-300 py-2 px-4 rounded-lg transition-colors duration-200 {{ request()->routeIs('dashboard.brosur.menu_brosur') ? 'bg-gray-300 text-gray-800 shadow' : '' }}">
                        <i class="fas fa-home fa-lg mr-3"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('dashboard.artikel.menu_artikel') }}" class="flex items-center text-gray-700 hover:bg-gray-300 py-2 px-4 rounded-lg transition-colors duration-200 {{ request()->routeIs('dashboard.artikel.menu_artikel') ? 'bg-gray-300 text-gray-800 shadow' : '' }}">
                        <i class="fa-solid fa-newspaper mr-3"></i>
                        <span>Artikel</span>
                    </a>
                </li>
                <!-- Add more menu items here -->
            </ul>
        </div>
        <!-- Logout Button -->
        <div class="p-6">
            <!-- Button Kembali ke Home -->
            <a href="{{ route('home') }}" class="flex items-center justify-center text-white bg-blue-600 py-2 px-4 rounded-lg mb-4">
                <i class="fas fa-home fa-lg mr-3"></i>
                <span>Home</span>
            </a>
        
            <!-- Logout Button -->
            <a href="{{ route('logout') }}" class="flex items-center justify-center text-white bg-red-600 py-2 px-4 rounded-lg">
                <i class="fas fa-sign-out-alt fa-lg mr-3"></i>
                <span>Logout</span>
            </a>
        </div>
        
    </div>
    <!-- Main Content -->
    <div class="flex-1 ml-64 bg-gray-100 transition-all duration-300">
        <!-- Navbar -->
        <div class="bg-white shadow-sm fixed top-0 left-64 right-0 z-10 flex justify-between items-center border-b border-gray-200">
            <div class="flex items-center space-x-4 p-6">
                <a href="{{ route('home') }}" class="text-gray-800 hover:text-green-600">
                    <i class="fa-solid fa-gauge"></i>
                </a>
                <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
            </div>
        </div>

        <!-- Content Area -->
        <div class="pt-24 px-8 pb-8">
            <!-- Breadcrumb -->
            <nav class="text-gray-600 mb-6">
                <ol class="list-reset flex text-sm">
                    <li><a href="{{ route('dashboard.brosur.menu_brosur') }}" class="text-blue-600 hover:underline">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-gray-500">Brosur</li>
                </ol>
            </nav>
            
            @yield('content')
        </div>
    </div>
</body>
</html>