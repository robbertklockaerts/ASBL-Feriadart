<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config("app.name", "Feria d'Art") }}</title>
    <!-- FAVICON AND WEBMANIFEST MADE IN http://favicon.io -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="font-sans min-h-screen antialiased">
    <!-- BACKOFFICE HEADER MENU -->
    <x-navigation />
    <!-- BACKOFFICE SECTION CONTENT -->
    <main class="relative flex items-top justify-center text-gray-900 bg-gradient-to-r from-yellow-100 via-white to-yellow-100 sm:items-center py-4 sm:pt-0">
        {{ $slot }}
    </main>
    <!-- FOOTER -->
    <x-footer />
    <!-- SCRIPTS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- ADD BUTTON JAVASCRIPT -->
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const overlay = document.querySelector('#overlay');
            const addBtn = document.querySelector('#addBtn');
            const closeModalX = document.querySelector('#closeModalX');
            const closeModal = document.querySelector('#closeModal');
            const toggleModal = () => {
                overlay.classList.toggle('hidden');
                overlay.classList.toggle('flex');
            }
            addBtn.addEventListener('click', toggleModal);
            closeModalX.addEventListener('click', toggleModal);
            closeModal.addEventListener('click', toggleModal);
        });
    </script>
</body>

</html>