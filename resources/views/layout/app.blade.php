<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        @include('include.nav')
        @yield('content')
        @include('include.footer')
    </body>
</html>