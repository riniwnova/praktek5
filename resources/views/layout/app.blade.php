 <html>
    <head>
        <title>@yield('title')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container text-left py-1 px-9">
            @yield('content')
        </div>
        @vite('resources/js/app.js')
    </body>
</html>