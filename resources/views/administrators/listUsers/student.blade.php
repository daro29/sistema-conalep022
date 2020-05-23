@extends('general._master')

@section('title','Listar Estudiantes')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-12 mx-auto">
            <div class="content-all">
                @include('message.session-status')
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="display-4 mb-0">Estudiantes Registrados</h1>
                </div>

                <p class="lead text-secondary">
                    En esta vista se muestra los estudiantes registrados en el sistema.
                </p>

                <ul class="list-group">

                    @isset($students)

                    @forelse ($students as $student)
                    <li class="list-group-item border-0 mb-3 shadow-sm align-items-center">
                        <a class="d-flex justify-content-between text-body">
                            <span class="font-weight-bold">{{$student->name }}</span>
                            <span class="text-black-50">Registro: {{ $student->created_at->format('d/m/Y') }}</span>
                        </a>
                    </li>
                    @empty
                    <li class="list-group-item border-0 mb-3 shadow-sm align-items-center">
                        No hay estudiantes registradas
                    </li>
                    @endforelse
                    {{ $students->links() }}
                    @endisset
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
