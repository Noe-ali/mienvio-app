<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/2b8c0a9f8b.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
</head>

<body>


    <div id="app">
        <main class="">
            <div class=" flex items-center justify-center text-center">
                <img src="https://cdn.dribbble.com/users/763493/screenshots/3694601/artboard_6.png" alt="" class="w-[200px]">
            </div>
            @yield('content')
        </main>
    </div>

</body>

</html>