@extends('general._master')

@section('title','Home')

@section('content')

<div class="container-home">
    <div class="contenedor-padre">
        <div class="contenedor contenedor1 shadow p-3 mb-5 bg-white rounded">
            <div class="contenedor foto">
                <img class="rounded-lg" src="../img/conalep.jpg" alt="">
            </div>

            <div class="contenedor elementos">
                <div class="elemento elemento1">
                <h4 class="font-weight-bold"><span class="fas fa-user">Nombre:</h4>
                    <p>{{ auth()->user()->name }}</p>
                </div>

                {{-- Administrador --}}
                @if( auth()->user()->role == 'admin' )
                <div class="elemento elemento2">
                    <h4 class="font-weight-bold"> <span class="fas fa-envelope-open-text">Email:</span> </h4>
                    <p>{{ auth()->user()->email }}</p>
                </div>

                @endif
                {{-- Estudiante --}}
                @if(auth()->user()->role=='student')
                <div class="elemento elemento4">
                    <h4 class="font-weight-bold">Carrera:</h4>
                    <p>{{ auth()->user()->career->name }}</p>
                </div>

                <div class="elemento elemento5">
                    <h4 class="font-weight-bold"><span class="icon-book-reference ml-3">Semestre:</span></h4>
                    <p> {{ auth()->user()->semester->name }}</p>
                </div>

                <div class="elemento elemento6">
                    <h4 class="font-weight-bold"><span class="icon-book-reference ml-3">Matricula:</span></h4>
                    <p>{{ auth()->user()->enrollment }}</p>
                </div>
                @endif
                {{-- Docente y administrador --}}
                @if (auth()->user()->role=='teacher' || auth()->user()->role=='admin')
                <div class="elemento elemento7">
                    <h4 class="font-weight-bold"><span class="fas fa-university ml-3">Plantel:</span></h4>
                    <p>{{ $school->name }}</p>
                </div>
                <div class="elemento elemento8">
                    <h4 class="font-weight-bold"><span class="fas fa-map-marked-alt ml-3">Ubicación:</span></h4>
                    <p>{{ $school->domicile }}</p>
                </div>
                @endif

            </div>
        </div>

        <div class="contenedor contenedor2 shadow p-3 mb-5 bg-white rounded">
            <h4 class="font-weight-bold"><span class="fas fa-comment-alt ml-3">Mensajes:</span></h4>
            @forelse ($notices as $notice)
            <div class="elemento aviso">
                <h4 class="font-weight-bold">{{ $notice->title }}</h4>
                <a type="button" class="btn btn-light btn-block"  href="{{ $notice->id }}" data-toggle="modal" data-target="#staticBackdrop">{{ $notice->excerpt }}</a>
            </div>
            @empty
            <p>No hay mensajes disponibles</p>
            @endforelse

        </div>
        </div>
</div>


<!-- Modal -->
@isset($notice)
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{ $notice->title }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! $notice->body !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endisset

@endsection
