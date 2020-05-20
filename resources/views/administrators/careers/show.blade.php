@extends('general._master')

@section('title','Carrera - ' . $career->name)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <div class="content-all">
                @include('message.session-status')
                <div class="bg-whithe p-5 shadow rounded">

                    <h1 class="display-6">{{ $career->name }}</h1>

                    <p class="text-secondary"><h5>Descripcion: </h5> {{ $career->description }}</p>
                    <p class="text-black-50"><h5>Fecha de creación: </h5> {{ $career->created_at->diffForHumans() }}</p>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('career.index') }}">Regresar</a>

                        <div class="btn-group btn-group">
                            <a class="btn btn-primary" href="{{ route('career.edit', $career) }}">Editar Carrera</a>
                            <a class="text-white btn btn-danger" onclick="event.preventDefault();
                                    document.getElementById('delete-career').submit();">Eliminar
                            </a>
                        </div>

                        <form id="delete-career" class="d-none" action="{{ route('career.destroy', $career) }}"
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
