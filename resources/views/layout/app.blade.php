<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body style="background-color: #08AEEA;background-image: linear-gradient(0deg, #08AEEA 0%, #33c76d 90%);">
        @include('include.nav')
        @yield('content')
        @include('include.footer')
    </body>
</html>