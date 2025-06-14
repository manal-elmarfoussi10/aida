<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen">
    <nav class="bg-gray-800 px-6 py-4 flex justify-between items-center">
        <div>
            <a href="/" class="font-bold text-green-400 text-xl">
                {{ config('app.name', 'Aida') }}
            </a>
        </div>
        <div class="flex items-center space-x-4">
            @auth
                <span class="text-gray-200">Hello, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded transition">
                        Log Out
                    </button>
                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="text-green-400 hover:text-green-300">Login</a>
            @endguest
        </div>
    </nav>
    
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>
</body>
</html>