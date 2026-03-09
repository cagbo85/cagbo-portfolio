<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='14' fill='%2317A096'/%3E%3Ctext x='50%25' y='54%25' text-anchor='middle' font-size='28' font-family='Arial, sans-serif' font-weight='700' fill='white'%3ECA%3C/text%3E%3C/svg%3E">

    {{-- Meta tags dynamiques --}}
    @yield('meta')

    {{-- Scripts additionnels par page --}}
    @stack('scripts')

    {{-- Titre dynamique --}}
    <title>@yield('title', 'Portfolio - UX/UI Designer')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F0F7F6] text-gray-900 antialiased">

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- Scripts additionnels en fin de page --}}
    @stack('scripts-footer')
</body>

</html>
