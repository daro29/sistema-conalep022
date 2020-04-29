<span id="button-menu" class="fa fa-bars"></span>
<!--nav del docente-->
<nav class="navegacion" data-spy="scroll">
    <ul class="menu">

        <li class="title-menu"><span class="fa fa-home icon-menu"></span>Inicio</li>

        {{-- Importar PTB --}}
        @auth('teacher')
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
        @endauth

        {{-- Información escolar --}}
        @auth('student')
        <li class="item-submenu" menu="1">
            <a href="#"><span class="fas fa-user-graduate icon-menu"></span>Información Escolar</a>
            <ul class="submenu">
                <li class="title-menu"><span class="fas fa-chart-line icon-menu"></span>Información Escolar</li>
                <li class="go-back">Atras</li>
                <li><a href="#">Calificaciones Parciales</a></li>
                <li><a href="#">Boletas</a></li>
            </ul>
        </li>
        @endauth
    |   @auth
         {{-- Logros --}}
        <li class="item-submenu" menu="2">
            <a href="#"><span class="fas fa-trophy icon-menu"></span>Logros</a>
            <ul class="submenu">
                <li class="title-menu"><span class="fas fa-chart-bar icon-menu"></span>Logros</li>
                <li class="go-back">Atras</li>
                <li><a href="{{ route('logros.parcial')     }}">Parciales</a></li>
                <li><a href="{{ route('logros.semestral')   }}">Semestral</a></li>
            </ul>
        </li>

        @endauth

        @auth('admin')
            <li><a href="#"><span class="fas fa-file-import icon-menu"></span>Subir Archivo</a></li>
        {{-- Avisos Admin --}}
        <li class="item-submenu" menu="3">
            <a href="#"><span class="fas fa-envelope icon-menu"></span>Enviar Avisos</a>
            <ul class="submenu">
                <li class="title-menu"><span class="fas fa-envelope-open icon-menu"></span>Avisos</li>
                <li class="go-back">Atras</li>
                <li><a href="#">Aviso Docentes</a></li>
                <li><a href="#">Aviso Alumnos</a></li>
            </ul>
        </li>
        {{-- Listar usuarios Admin --}}
        <li class="item-submenu" menu="4">
            <a href="#"><span class="fas fa-list-ol icon-menu"></span>Lista Usuarios</a>
            <ul class="submenu">
                <li class="title-menu"><span class="fas fa-list-ul icon-menu"></span>Lista Usuarios</li>
                <li class="go-back">Atras</li>
                <li><a href="{{ route('list.student') }}">Listar Alumnos</a></li>
                <li><a href="{{ route('list.teacher') }}">Listar Docentes</a></li>
            </ul>
        </li>
       {{-- Subir Archivos Admin --}}
        <li class=" item-submenu" menu="5">
            <a href="#"><span class="fas fa-file-upload icon-menu"></span>Administrar</a>
            <ul class="submenu">
                <li class="title-menu"><span class="fas fa-file-upload icon-menu"></span>Registro</li>
                <li class="go-back">Atras</li>
                <li><a href="{{ route('career.index')   }}">Carreras</a></li>
                <li><a href="{{ route('group.index')    }}">Grupos</a></li>
            </ul>
        </li>
        @endauth

        <li><a href="{{ route('contact') }}"><span class="fa fa-envelope icon-menu"></span>Contacto</a></li>

        <a class="dropdown-item fas fa-window-close icon-menu" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <span>Cerrar Sesión</span>
        </a>
</nav>
