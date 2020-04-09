<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conalep - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset ('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/morris.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">

</head>
<body>
    @yield('content')
    <header>
		<span id="button-menu" class="fa fa-bars"></span>

		<nav class="navegacion">
			<ul class="menu">
				<!-- TITULAR -->
				<li class="title-menu"><span class="fa fa-home icon-menu"></span>Inicio</li>
				<!-- TITULAR -->
                <li class="item-submenu" menu="0">
					<a href="#"><span class="fas fa-award icon-menu"></span>Capturar</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fas fa-graduation-cap "></span>Carreras</li>
						<li class="go-back">Atras</li>
						<li><a href="{{ route('ptb.autotronica') }}">ptb-Autotrónica</a></li>
						<li><a href="{{ route('ptb.construccion') }}">ptb-Construcción</a></li>
						<li><a href="{{ route('ptb.hospitalidad') }}">ptb-Hospotalidad</a></li>
						<li><a href="{{ route('ptb.informatica') }}">ptb-Informática</a></li>
                        <li><a href="{{ route('ptb.mecanica') }}">ptb-Mecánica Automotriz</a></li>
					</ul>
                </li>

				<li class="item-submenu" menu="1">
					<a href="#"><span class="fa fa-file-o icon-menu"></span>Informacion Escolar</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-file-o icon-menu"></span>Informacion Escolar</li>
						<li class="go-back">Atras</li>

						<li><a href="#">Boletas</a></li>
						<li><a href="#">Calificaciones Parciales</a></li>
						<!--<li><a href="#">Dominios</a></li>-->
					</ul>
                </li>

				<li class="item-submenu" menu="2">
					<a href="#"><span class="fa fa-lightbulb-o icon-menu"></span>Logros</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-lightbulb-o icon-menu"></span>Logros</li>
						<li class="go-back">Atras</li>
						<li><a href="{{ route('logros.parcial') }}">Parcial</a></li>
						<li><a href="{{ route('logros.semestral') }}">Semestral</a></li>
					</ul>
                </li>

				<li><a href="{{ route('contact') }}"><span class="fa fa-envelope icon-menu"></span>Contacto</a></li>
				<li><a href="#"><span class="fa fa-window-close-o icon-menu"></span>Cerrar Sección</a></li>
			</ul>
        </nav>
    </header>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{ asset ('js/morris.min.js') }}"></script>
    <script src="{{ asset ('js/main.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}
    <script src="https://kit.fontawesome.com/ad2035d795.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    {{-- <script src="js/lineas.js" charset="utf-8"></script> --}}
    <script src="{{ asset ('js/lineas.js') }}" charset="utf-8"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
