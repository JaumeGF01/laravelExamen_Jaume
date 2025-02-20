<html>
    <head>
        @yield('titulo')
    </head>
    <body>
        
        <main>
            <nav>
                @include("partials.nav")
            </nav>
            @yield("contenido")
        </main>
    </body>
</html>