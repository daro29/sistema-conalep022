@extends('general._master')

@section('title','Crear Carrera')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-7 mx-auto">
            <div class="content-all">
                @auth('admin')
                <form class="px-4 shadow-lg p-3 mb-5 bg-white rounded p-3 mb-5 bg-white rounded" action="{{ route('group.update', $group) }}" method="POST">
                    @method('PATCH')
                    <h1 class="display-6 text-center">Editar Grupo</h1>
                    <hr>
                    @include('administrators.groups._form-group', ['btn' => 'Editar Grupo'])
                </form>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection
