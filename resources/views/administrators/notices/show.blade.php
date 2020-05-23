@extends('general._master')

@section('title','Aviso - ' . $notice->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <div class="content-all">
                @include('message.session-status')
                <div class="bg-white p-5 shadow rounded">

                    <h1 class="text-center display-6">{{ $notice->title }}</h1>

                    <p class="text-secondary"><h3>Extracto:       </h3> {{ $notice->excerpt }}</p>
                    <p class="text-secondary"><h3>Contenido:      </h3> {!! $notice->body !!}</p>
                    <p class="text-black-50"><h3>Fecha de creación:</h3> {{ $notice->created_at->diffForHumans() }}</p>

                    <div class="d-flex justify-content-between align-items-center">
                        <a class="btn btn-outline-dark" href="{{ route('notices.index') }}">Regresar</a>

                        <div class="btn-group btn-group">
                            <a class="btn btn-primary" href="{{ route('notices.edit', $notice) }}">Editar Aviso</a>
                            <a class="text-white btn btn-danger" onclick="event.preventDefault();
                                    document.getElementById('delete-notices').submit();">Eliminar
                            </a>
                        </div>

                        <form id="delete-notices" class="d-none" action="{{ route('notices.destroy', $notice) }}"
                            method="POST">

                            @csrf @method('DELETE')
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
