<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link href="{{ asset('/css/estyle.css') }}" rel="stylesheet">
    <link href="{{ asset('/fonts/style-iconos.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>sisconalep022</title>
</head>

<body>
        <!-- carga -->
        <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
    <!-- fin de carga -->


        <header class="header">
            <div class="conteiner logo-nav-conteiner">
                <img class="imagen" src="{{ asset('/img/conalep3.png') }}">
                <h1 class="titulo">SISTEMA DE CALIFICACIONES CONALEP PLANTEL CHIAPA DE CORZO 022</h1>
                <!--<a href="#" class="logo">Logo</a>-->
                <nav class="navigation"></nav>
            </div>
        </header>
        <!--https://codepen.io/armantaherian/pen/ZyZWVZ-->
        <!---->




        <div class="contenedor">
        <main class="main">
            <div class="estudiante">
            <a href="{{ route('student.login') }}" class="text-dark"><h2 class="logo"><span class="icon-v-card">ESTUDIANTES</span></h2></a>
            </div>
            <div class="docente">
             <a href="{{ route('teacher.login') }}"class="text-dark"><h2 class="logo2"><span class="icon-users">DOCENTES</span></h2></a>
            </div>
            <div class="admin">
                <a href="{{ route('admin.login') }}" class="text-dark"><h2 class="logo3"><span class="icon-user">ADMINISTRADOR</span></h2></a>
            </div>
        </main>

    </div>

        <footer></footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/animation.js"></script>
</body>
</html>
