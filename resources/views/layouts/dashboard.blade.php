<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--alpinejs-->
    @vite('resources/css/app.css')
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="antialiased bg-slate-400">
    <div class="flex ">
        @include('partials.sidebar_dashboard')
        <div class="w-full">
            @include('partials.header_dashboard')
            @yield('content')
        </div>
    </div>
    <x-flash-message />
    @vite('resources/js/app.js')
</body>

</html>
