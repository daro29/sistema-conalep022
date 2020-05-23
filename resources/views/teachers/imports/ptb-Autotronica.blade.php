@extends('general._master')

@section('title','PTB Autotronica')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <div class="content-all">
                @include('message.session-status')
                @auth('teacher')
                <form class="px-4 shadow-lg p-3 mb-5 bg-white rounded" action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
                    <h1 class="display-6 text-center">Técnico Bachiller | Autotrónica</h1>
                    <hr>
                    @include('teachers.partials._form-ptb')
                </form>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection
