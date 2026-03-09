<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Titre dynamique --}}
    <title>@yield('title', 'AGBO Charles - UX/UI Designer Junior')</title>
    <meta name="description" content="@yield('meta_description', 'Portfolio de Charles AGBO, UX/UI Designer junior avec un esprit de developpeur Full Stack.')">
    <meta name="robots" content="@yield('meta_robots', 'index,follow')">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AGBO Charles - Portfolio">
    <meta property="og:title" content="@yield('og_title', 'AGBO Charles - UX/UI Designer Junior')">
    <meta property="og:description" content="@yield('og_description', 'Portfolio de Charles AGBO, UX/UI Designer junior.')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:image" content="@yield('og_image', asset('images/og-cover.jpg'))">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'AGBO Charles - UX/UI Designer Junior')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Portfolio de Charles AGBO, UX/UI Designer junior.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-cover.jpg'))">

    {{-- Meta tags dynamiques --}}
    @yield('meta')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='14' fill='%2317A096'/%3E%3Ctext x='50%25' y='54%25' text-anchor='middle' font-size='28' font-family='Arial, sans-serif' font-weight='700' fill='white'%3ECA%3C/text%3E%3C/svg%3E">

    {{-- Scripts additionnels par page --}}
    @stack('scripts')

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
