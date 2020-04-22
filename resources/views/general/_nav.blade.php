<span id="button-menu" class="fa fa-bars"></span>

<nav class="navegacion">
    <ul class="menu">

        <li class="title-menu"><span class="fa fa-home icon-menu"></span>Inicio</li>
        <!-- TITULAR -->

        <li class="item-submenu" menu="0">
            <a href="#"><span class="fas fa-layer-group icon-menu"></span>Capturar</a>
            <ul class="submenu">
                <li class="title-menu"><span class="fas fa-graduation-cap icon-menu"></span>Carreras</li>
                <li class="go-back">Atras</li>
                <li><a href="{{ route('ptb.autotronica')  }}">ptb-Autotrónica</a></li>
                <li><a href="{{ route('ptb.construccion') }}">ptb-Construcción</a></li>
                <li><a href="{{ route('ptb.hospitalidad') }}">ptb-Hospotalidad</a></li>
                <li><a href="{{ route('ptb.informatica')  }}">ptb-Informática</a></li>
                <li><a href="{{ route('ptb.mecanica')     }}">ptb-Mecánica Automotriz</a></li>
            </ul>
        </li>


        <li class="item-submenu" menu="1">
            <a href="#"><span class="fas fa-user-graduate icon-menu"></span>Informacion Escolar</a>
            <ul class="submenu">
                <li class="title-menu"><span class="fas fa-chart-line icon-menu"></span>Informacion Escolar</li>
                <li class="go-back">Atras</li>

                <li><a href="#">Boletas</a></li>
                <li><a href="#">Calificaciones Parciales</a></li>
                <!--<li><a href="#">Dominios</a></li>-->
            </ul>
        </li>

        <li class="item-submenu" menu="2">
            <a href="#"><span class="fas fa-trophy icon-menu"></span>Logros</a>
            <ul class="submenu">
                <li class="title-menu"><span class="fas fa-medal icon-menu"></span>Logros</li>
                <li class="go-back">Atras</li>
                <li><a href="{{ route('logros.parcial') }}">Parcial</a></li>
                <li><a href="{{ route('logros.semestral') }}">Semestral</a></li>
            </ul>
        </li>

        <li><a href="{{ route('contact') }}"><span class="fa fa-envelope icon-menu"></span>Contacto</a></li>

        <li><a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        <span class="fa fa-window-close-o icon-menu"></span>Cerrar Sección</a></li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ul>

</nav>
