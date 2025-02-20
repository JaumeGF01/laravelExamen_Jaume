<nav>
    <a href="{{ route('index') }}">Inicio</a>
    &nbsp;&nbsp;
    <a href="{{ route('libros.index') }}">Listado de libros</a>
    @if (auth()->check())
        <span>Admin</span>
        <a href="{{route('logout')}}">Cerrar sesión</a>
    @endif
</nav>