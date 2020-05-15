@extends('general._master')

@section('title','Home')

@section('content')
<div class="container-home">
    <div class="container">
        <div class="row">
            <div class="contenedor-padre">
                <div class="contenedor contenedor1 shadow p-3 mb-5 bg-white rounded">
                    <div class="contenedor foto">
                        <img class="rounded-lg" src="../img/conalep.jpg" alt="">
                    </div>
                    <div class="contenedor elementos">
                        <div class="elemento elemento1 border-bottom"><p class="font-weight-bold">Nombre:</p>
                            <span class="font-italic">Darinel Cigarroa De Los Santos</span>
                        </div>

                        <div class="elemento elemento2 border-bottom"><p class="font-weight-bold">Matricula:</p>
                            <span class="font-italic">16270167</span>
                        </div>

                        <div class="elemento elemento3 border-bottom"><p class="font-weight-bold">Carrera:</p>
                            <span class="font-italic">Ingenieria en sistemas</span>
                        </div>

                        <div class="elemento elemento4 border-bottom"><p class="font-weight-bold">Semestre:</p>
                            <span class="font-italic">9° Semestre</span>
                        </div>
                    </div>
                </div>
                <div class="contenedor contenedor2 shadow p-3 mb-5 bg-white rounded">Mensajes:</div>
            </div>
        </div>
    </div>
</div>
@endsection
