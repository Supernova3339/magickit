<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- used to get dark mode immediately --}}
    <script>
        let isDarkMode = localStorage.getItem('dark_mode') === 'true';

        // Check the initial theme and apply it
        if (isDarkMode) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MagicKit') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen antialiased bg-white dark:bg-gradient-to-b dark:from-gray-950 dark:to-gray-900">
{{ $slot }}
    @livewireScripts
</body>
</html>
