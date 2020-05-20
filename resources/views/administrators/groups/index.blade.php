@extends('general._master')

@section('title', 'Carreras')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-12 mx-auto">
            <div class="content-all">

                @include('message.session-status')

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="display-4 mb-0">Grupos Registrados</h1>

                    <strong>
                        <a class="btn btn-primary" href="{{ route('group.create') }}">Crear nueva grupo</a>
                    </strong>

                </div>

                <p class="lead text-secondary">
                    En esta vista se muestra los grupos registrados, puede realizar diversas acciones
                    (crear nuevas claves de grupos, modificar uno existente y eliminar si así lo desea.)
                </p>

                <ul class="list-group">

                    @isset($groups)

                    @forelse ($groups as $group)
                    <li class="list-group-item border-0 mb-3 shadow-sm align-items-center">
                        <a class="d-flex justify-content-between" href="{{ route('group.show', $group) }}">
                            <span class="font-weight-bold">{{ $group->code }}</span>
                            <span class="text-black-50">{{ $group->created_at->format('d/m/Y') }}</span>
                        </a>
                    </li>
                    @empty
                    <li class="list-group-item border-0 mb-3 shadow-sm align-items-center">
                        No hay grupos registrados
                    </li>
                    @endforelse
                    {{ $groups->links() }}
                    @endisset
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
