<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
    </head>
    <body>
        @section('navbar')
            Contingut del navbar
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>