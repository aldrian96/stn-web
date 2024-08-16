<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8 mx-4 sm:mx-6 lg:mx-8">
        <!-- Logo -->
        <div class="flex flex-col items-center mb-6">
            <img src="/img/logo.png" alt="Logo" class="h-16 w-16 mb-2">
            <h3 class="text-xl font-semibold text-gray-900">PT SARANA TUNAS NIAGA</h3>
        </div>
        
        <h2 class="text-2xl font-bold text-center text-gray-900 mb-6">Login</h2>
        
        <form method="POST" action="#">
            <!-- CSRF Token -->
            @csrf
            
            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" placeholder="Masukkan email Anda">
            </div>
            
            <!-- Password Input -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring focus:border-green-500" placeholder="Masukkan password Anda">
            </div>
            
            <!-- Remember Me & Forgot Password -->
            <div class="mb-4 flex justify-between items-center">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 text-gray-700 text-sm">Ingat saya</label>
                </div>
                <div>
                    <a href="#" class="text-sm text-green-600 hover:underline">Lupa password?</a>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="mb-6">
                <button type="submit" class="w-full bg-green-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">Login</button>
            </div>
        </form>
        <a href="{{ route('dashboard.menu1') }}" class="flex justify-center text-sm text-green-600 hover:underline">Masuk Dashboard</a>

        <a href="{{ route('home') }}" class="flex justify-center text-sm text-green-600 hover:underline">Kembali</a>
    </div>
</body>
</html>
