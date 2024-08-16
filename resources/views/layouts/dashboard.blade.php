<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col h-screen">
    <!-- Navbar -->
    <div class="bg-white">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
            <div class="flex items-center space-x-4">
                @if(auth()->check())
                    <span class="text-gray-700">Hello, {{ auth()->user()->name }}</span>
                @else
                    <span class="text-gray-700">Hello, Guest</span>
                @endif
                <a href="{{ route('logout') }}" class="text-red-600 hover:underline">Logout</a>
            </div>
        </div>
    </div>

    <div class="flex flex-1">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-200 text-gray-800 min-h-full">
            <div class="p-6">
                <!-- User Info -->
                @if(auth()->check())
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('img/profile.jpg') }}" alt="Profile Picture" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h2 class="text-xl font-semibold">{{ auth()->user()->name }}</h2>
                            <p class="text-gray-600 text-sm">Administrator</p>
                        </div>
                    </div>
                @endif

                <!-- Navigation Links -->
                <ul>
                    <li class="mb-4">
                        <a href="{{ route('dashboard.menu1') }}" class="flex items-center p-3 rounded-md {{ request()->routeIs('dashboard.menu1') ? 'bg-gray-300 text-gray-800' : 'text-gray-600 hover:bg-gray-300' }}">
                            <i class="fas fa-home fa-lg mr-3"></i>
                            <span class="text-lg">Menu 1</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('dashboard.menu2') }}" class="flex items-center p-3 rounded-md {{ request()->routeIs('dashboard.menu2') ? 'bg-gray-300 text-gray-800' : 'text-gray-600 hover:bg-gray-300' }}">
                            <i class="fas fa-cogs fa-lg mr-3"></i>
                            <span class="text-lg">Menu 2</span>
                        </a>
                    </li>
                    <!-- Add more menu items here -->
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Breadcrumb -->
            <nav class="text-gray-600 mb-4">
                <ol class="list-reset flex">
                    <li><a href="{{ route('dashboard.menu1') }}" class="text-green-600 hover:underline">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-gray-500">Menu 1</li>
                </ol>
            </nav>
            
            @yield('content')
        </div>
    </div>
</body>
</html>
