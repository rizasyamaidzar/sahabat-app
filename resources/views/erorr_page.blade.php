<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Player Stat's</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('links')
    @yield('style')
    <style>
        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="font-sans antialiased bg-fe-secondary">
    @include('players.components.splash')
    {{-- <h1 class="my-20"> tes</h1> --}}
    <div class="text-center animate-fadeIn mt-20">
        <img src="https://yemca-services.net/404.png" alt="404 Illustration"
            class="mx-auto w-80 animate-[float_3s_infinite] shadow-xl rounded-lg">
        <h1 class="text-4xl font-extrabold text-blue-700 mt-6">Looks Like You're Lost!</h1>
        <p class="text-xl text-gray-700 mt-2">We can't seem to find the page you're looking for.</p>
    </div>
    @yield('script')
</body>

</html>
