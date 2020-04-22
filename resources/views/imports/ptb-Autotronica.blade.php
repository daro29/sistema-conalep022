@extends('general._master')

@section('title','PTB Autotronica')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <div class="content-all">
                <form class="px-4 shadow-lg p-3 mb-5 bg-white rounded" action="#" method="POST">
                    <h1 class="display-6 text-center">Técnico Bachiller | Autotrónica</h1>
                    <hr>
                    @include('imports._form-ptb')
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
