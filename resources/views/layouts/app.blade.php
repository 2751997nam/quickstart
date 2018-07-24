<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{  asset('css/app.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>
        @yield('content')
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('script')
    </body>
</html>
