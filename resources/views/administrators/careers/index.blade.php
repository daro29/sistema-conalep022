@extends('general._master')

@section('title', 'Carreras')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-12 mx-auto">
            <div class="content-all">
                @include('message.session-status')
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="display-4 mb-0">Carreras Registradas</h1>

                    <strong>
                        <a class="btn btn-primary" href="{{ route('career.create') }}">Crear nueva carrera</a>
                    </strong>

                </div>

                <p class="lead text-secondary">
                    En esta vista se muestra las carreras registradas, puede realizar diversas acciones
                    (crear nuevas carreras, modificar una existente y eliminar si así lo desea.)
                </p>

                <ul class="list-group">

                    @isset($careers)

                    @forelse ($careers as $career)
                    <li class="list-group-item border-0 mb-3 shadow-sm align-items-center">
                        <a class="d-flex justify-content-between" href="{{ route('career.show', $career) }}">
                            <span class="font-weight-bold">{{ $career->name }}</span>
                            <span class="text-black-50">{{ $career->created_at->format('d/m/Y') }}</span>
                        </a>
                    </li>
                    @empty
                    <li class="list-group-item border-0 mb-3 shadow-sm align-items-center">
                        No hay carreras registradas
                    </li>
                    @endforelse
                    {{ $careers->links() }}
                    @endisset
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
