@extends('general._master')

@section('title', 'Avisos')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-12 mx-auto">
            <div class="content-all">

                @include('message.session-status')

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="display-4 mb-0">Avisos Capturados</h1>

                    <strong>
                        <a class="btn btn-primary border border-dark" href="{{ route('notices.create') }}">Crear nuevo Aviso</a>
                    </strong>

                </div>

                <p class="lead text-secondary">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sequi cumque quo
                    vel dolorem animi, quibusdam odio facilis pariatur, qui quae perspiciatis, neque reprehenderit molestiae voluptate quod delectus ea temporibus.
                </p>

                <ul class="list-group">

                    @isset($notices)

                    @forelse ($notices as $notice)
                    <li class="list-group-item border-0 mb-3 shadow-sm align-items-center">
                        <a class="d-flex justify-content-between" href="{{ route('notices.show', $notice) }}">
                            <span class="font-weight-bold"> {{ $notice->title }}</span>
                            <span class="text-black-50">    {{ $notice->created_at->format('d/m/Y') }}</span>
                        </a>
                    </li>
                    @empty
                    <li class="list-group-item border-0 mb-3 shadow-sm align-items-center">
                        No hay avisos registrados
                    </li>
                    @endforelse
                    {{ $notices->links() }}
                    @endisset
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
