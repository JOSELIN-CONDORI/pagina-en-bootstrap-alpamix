<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <link  href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link  href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/animate/animate.min.css')}}" rel="stylesheet">



    @livewireStyles
</head>
<body>
    <div id="app">
        @include('layouts.inc.frontend.navbar')

        <main class="">
            @yield('content')
        </main>
        @include('layouts.inc.frontend.footer')

    </div>

    <script src="{{asset ('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{asset ('assets/js/bootstrap.bundle.min.js')}}"></script>



    @livewireScripts

</body>
</html>
