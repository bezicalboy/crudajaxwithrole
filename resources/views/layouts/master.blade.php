<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>laravel role</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('') }}vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}vendor/perfect-scrollbar/css/perfect-scrollbar.css">

    <!-- CSS for this page only -->
@stack('css')
    <!-- End CSS  -->

    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap-override.min.css">
    <link rel="stylesheet" id="theme-color" href="{{ asset('') }}assets/css/dark.min.css">
</head>

<body>
    <div id="app">
        <div class="shadow-header"></div>
        {{-- header --}}
        @include('layouts.header')
        {{-- end header --}}
        {{-- nav --}}
        @include('layouts.nav')
        {{-- end nav --}}
        {{-- main content --}}
        @yield('content')
        {{-- end main content --}}
        {{-- settings --}}
        @include('layouts.setting')
        {{-- end settings --}}


        <div class="overlay action-toggle">

        </div>

    </div>
    <div class="footer">
        <footer>
            Copyright © 2022 &nbsp <a href="https://www.youtube.com/channel/UCRUAHStgpcLyfnhjwSlnEyQ" target="_blank" class="ml-1"> bezical </a> <span> . All rights Reserved</span>
        </footer>
    </div>
    <script src="{{ asset('') }}vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('') }}vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>

    <!-- js for this page only -->
    @stack('js')
    <!-- ======= -->
    <script src="{{ asset('') }}assets/js/main.js"></script>
    <script>
        Main.init()
    </script>
</body>

</html>
