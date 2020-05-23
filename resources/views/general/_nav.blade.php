<span id="button-menu" class="fa fa-bars"></span>
<!--nav del docente-->
<nav class="navegacion" data-spy="scroll">
    <ul class="menu">

        <li class="title-menu"><span class="icon-home1"></span>Inicio</li>

        {{-- Importar PTB --}}
        @auth('teacher')
        <li class="item-submenu" menu="1">
            <a href="#"><span class="icon-file-excel-o"></span>Capturar</a>
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
          {{-- Logros --}}
        <li class="item-submenu" menu="3">
            <a href="#"><span class="icon-line-chart"></span>Logros</a>
            <ul class="submenu">
                <li class="title-menu"><span class="icon-line-chart"></span>Logros</li>
                <li class="go-back">Atras</li>
                <li><a href="{{     route('achievements.partial')     }}">Parciales</a></li>
                <li><a href="{{     route('achievements.biannual')   }}">Semestral</a></li>
            </ul>
        </li>
        @endauth

        {{-- Información escolar --}}
        @auth('student')
        <li class="item-submenu" menu="2">
            <a href="#"><span class="icon-book-reference"></span>Información Escolar</a>
            <ul class="submenu">
                <li class="title-menu"><span class="icon-book-reference"></span>Información Escolar</li>
                <li class="go-back">Atras</li>
                <li><a href="#">Calificaciones Parciales</a></li>
                <li><a href="#">Boletas</a></li>
            </ul>
        </li>
        @endauth

        @auth('admin')

        <li><a href="#"><span class="icon-archive"></span>Subir Archivo</a></li>
        {{-- Avisos Admin --}}
        <li class="item-submenu" menu="4">
            <a href="#"><span class="icon-send"></span>Enviar Avisos</a>
            <ul class="submenu">
                <li class="title-menu"><span class="fas fa-envelope-open icon-menu"></span>Avisos</li>
                <li class="go-back">Atras</li>
                <li><a href="{{ route('notices.index') }}">Gestionar Avisos</a></li>
            </ul>
        </li>

        {{-- Subir Archivos Admin --}}
        <li class=" item-submenu" menu="6">
            <a href="#"><span class="icon-folder"></span>Administrar</a>
            <ul class="submenu">
                <li class="title-menu"><span class="icon-add-user"></span>Registro</li>
                <li class="go-back">Atras</li>
                <li><a href="{{ route('career.index')   }}">Crear Carreras</a></li>
                <li><a href="{{ route('group.index')    }}">Crear Grupos</a></li>
                <li><a href="{{ route('list.student')   }}">Listar Alumnos</a></li>
                <li><a href="{{ route('list.teacher')   }}">Listar Docentes</a></li>
            </ul>
        </li>
        {{-- Listar usuarios Admin --}}

        @endauth

        <li><a href="{{ route('contact') }}"><span class="icon-address-book"></span>Contacto</a></li>

        <a class="icon-cross" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <span>Cerrar Sesión</span>
        </a>
</nav>
