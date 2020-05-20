<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conalep - @yield('title')</title>
    {{-- Personalizados --}}
    <link rel="stylesheet" href="{{ asset ('/css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset ('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset ('/css/estilos-index.css') }}">
    <link href="{{ asset('/fonts/style.css') }}" rel="stylesheet">


    {{-- Morris --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <link rel="stylesheet" href="{{ asset ('/css/morris.css') }}">
    <script src="{{ asset ('js/morris.min.js') }}"></script>

    {{-- Bootpstrap --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    {{-- <link href="{{ asset('css/app.css') defer}}" rel="stylesheet"> --}}
    <script type="text/javascript" rel="script" src="{{ asset('js/app.js')}}"></script>
    {{-- Fuente para la página --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap">

</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
    <main class="pt-3">
        @yield('content')
    </main>

    <header>
        @auth
        <a id="navbarDropdown" class="btn btn-outline-light float-right my-2 my-sm-0 nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ auth()->user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item btn btn-outline-light float-right my-2 my-sm-0" href= "{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Cerrar Sesión') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @endauth
            @include('general._nav')
    </header>
    </div>
@yield('scripts')
<script src="{{ asset ('js/main.js') }}"></script>
<script src="{{ asset ('js/lineas.js') }}" charset="utf-8"></script>
<script src="https://kit.fontawesome.com/ad2035d795.js" crossorigin="anonymous"></script>
</body>
</html>
