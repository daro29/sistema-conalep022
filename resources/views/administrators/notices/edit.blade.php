@extends('general._master')

@section('title','Editar Aviso')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-7 mx-auto">
            <div class="content-all">
                <form class="px-4 shadow-lg p-3 mb-5 bg-white rounded p-3 mb-5 bg-white rounded" action="{{ route('notices.update', $notice) }}" method="POST">
                    @method('PUT')
                    <h1 class="display-6 text-center">Editar Aviso</h1>
                    <hr>
                    @include('administrators.notices.partials._form-notice', ['btn' => 'Editar Aviso'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
