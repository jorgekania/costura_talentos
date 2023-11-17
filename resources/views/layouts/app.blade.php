<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>

    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    <div class="p-5 mx-auto xl:max-w-screen-xl">
        <section id="header">
            @include('components.header')
        </section>

        <section id="content">
            @yield('content')
        </section>

        <section id="footer" class="bg-base py-16 mt-20 justify-center">
            @include('components.footer')
        </section>
    </div>

    @livewireScripts
</body>

</html>
