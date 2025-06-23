<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aida Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="flex h-screen overflow-hidden font-sans">

    <!-- LEFT SIDE: Image with overlay and logo/text -->
    <div class="w-1/2 hidden lg:flex items-center justify-center bg-cover bg-center relative"
         style="background-image: url('{{ asset('images/loginaida.png') }}');">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-40"></div>

        <!-- Centered content -->
        <div class="relative z-10 text-white text-center px-10">
            <!-- Logo -->
            <img src="{{ asset('images/logologin.png') }}" alt="Aida Logo" class="mx-auto w-[360px] mb-12">

            <!-- Title -->
            <h1 class="text-5xl font-extrabold mb-6 leading-tight">Welcome to aida</h1>

            <!-- Subtitle -->
            <p class="text-xl font-medium leading-relaxed">
                The first AI Agent Designed solely to optimize<br> energy usage
            </p>
        </div>
    </div>

    <!-- RIGHT SIDE: Login form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-10 bg-white">
        <div class="w-full max-w-md space-y-6">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-900">Log in</h2>

            <p class="text-sm">
                New user?
                <a href="{{ route('register') }}" class="text-green-600 hover:underline">Create an account</a>
            </p>

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input id="email" name="email" type="email" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                </div>

                <div class="text-right">
                    <a href="{{ route('password.request') }}" class="text-gray-500 text-sm hover:underline">
                        Forgot password?
                    </a>
                </div>

                <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                    Log in
                </button>
            </form>

            <!-- OR Separator -->
            <div class="flex items-center justify-center gap-4">
                <hr class="w-1/3 border-gray-300"> <span class="text-gray-400 text-sm">or</span> <hr class="w-1/3 border-gray-300">
            </div>

            <!-- Social buttons -->
            <div class="space-y-3">
                <button class="w-full flex items-center justify-center gap-2 border border-gray-300 py-2 rounded-md hover:bg-gray-50 text-sm font-medium">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google">
                    Log in with Google
                </button>

                <button class="w-full flex items-center justify-center gap-2 border border-gray-300 py-2 rounded-md hover:bg-gray-50 text-sm font-medium">
                   <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" class="w-5 h-5 mr-2" alt="Facebook">
                    Log in with Facebook
                </button>
            </div>

            <!-- Footer note -->
            <p class="text-[13px] text-gray-400 text-center leading-snug">
    Protected by reCAPTCHA and subject to the Google
    <a href="#" class="text-blue-500 hover:underline">Privacy Policy</a> and
    <a href="#" class="text-blue-500 hover:underline">Terms of Service</a>.
</p>

        </div>
    </div>

</body>
</html>
