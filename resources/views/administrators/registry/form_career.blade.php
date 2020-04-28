@extends('general._master')

@section('title','PTB Autotronica')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <div class="content-all">
                <form class="px-4 shadow-lg p-3 mb-5 bg-white rounded" action="#" method="POST">
                    <h1 class="display-6 text-center">Carreras</h1>
                    <hr>
                    @csrf
                    <div class="from-group">
                        <label for="file">Elige tu archivo:</label>
                        <input class="form-control py-1 bg-light @error('file') is-invalid @else border-1 @enderror"
                            id="file"
                            type="file"
                            name="file">
                        @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <br>
                    <input class="btn btn-outline-success  btn-lg btn-block" type="submit" value="Importar">
                    <a class="btn btn-lg btn-light btn-block" href="#">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
