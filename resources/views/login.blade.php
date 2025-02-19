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
</head>

<body class="font-sans antialiased bg-fe-secondary">
    @include('players.components.splash')
    {{-- <h1 class="my-20"> tes</h1> --}}
    <div class="max-w-sm mx-auto bg-white rounded-lg p-10 mt-52">
        <h1 class="font-bold text-2xl my-5 text-fe-secondary text-center">Login</h1>
        <form action="/dashboard" method="POST">
            <div class="mb-5">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Username</label>
                <input type="text" id="username" name="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required />
            </div>
            <button type="submit"
                class="text-white bg-fe-secondary hover:bg-fe-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-full px-5 py-2.5 text-center ">Submit</button>
        </form>
    </div>
    @yield('script')
</body>

</html>
