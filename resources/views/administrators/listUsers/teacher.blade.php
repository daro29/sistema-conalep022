@extends('general._master')

@section('title', 'Carreras')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-12 mx-auto">
            <div class="content-all">
                @include('message.session-status')
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="display-4 mb-0">Docentes Registrados</h1>
                </div>

                <p class="lead text-secondary">
                    En esta vista se muestra los docentes registrados en el sistema.
                </p>

                <ul class="list-group">

                    @isset($teachers)

                    @forelse ($teachers as $teacher)
                    <li class="list-group-item border-0 mb-3 shadow-sm align-items-center">
                        <a class="d-flex justify-content-between">
                            <span class="font-weight-bold">{{ $teacher->name }}</span>
                            <span class="text-black-50">{{ $teacher->created_at->format('d/m/Y') }}</span>
                        </a>
                    </li>
                    @empty
                    <li class="list-group-item border-0 mb-3 shadow-sm align-items-center">
                        No hay carreras registradas
                    </li>
                    @endforelse
                    {{ $teachers->links() }}
                    @endisset
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
