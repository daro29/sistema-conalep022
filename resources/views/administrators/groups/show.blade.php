@extends('general._master')

@section('title','Grupo - ' . $group->code)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <div class="content-all">
                @include('message.session-status')
                <div class="bg-whithe p-5 shadow rounded">

                    <h1 class="display-6">{{ $group->code }}</h1>

                    <p class="text-black-50"><h5>Fecha de creación: </h5> {{ $group->created_at->diffForHumans() }}</p>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('group.index') }}">Regresar</a>
                        @auth
                        <div class="btn-group btn-group">
                            <a class="btn btn-primary" href="{{ route('group.edit', $group) }}">Editar Carrera</a>
                            <a class="text-white btn btn-danger" onclick="event.preventDefault();
                                    document.getElementById('delete-group').submit();">Eliminar
                            </a>
                        </div>

                        <form id="delete-group" class="d-none" action="{{ route('group.destroy', $group) }}"
                            method="POST">

                            @csrf @method('DELETE')
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
