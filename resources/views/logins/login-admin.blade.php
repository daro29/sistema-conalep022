@extends('logins._login')

@section('title', 'Administrador')

@section('css')
    <link href="{{ asset('/css/login/login-admin.css') }}" rel="stylesheet">
@endsection

@section('content')

<form class="form-container" action="{{ route('admin.login') }}" method="POST">
    @csrf
    <h1>Iniciar Sesión</h1>
    <div class="form-group">
        <label class="label" for="email">Correro Electronico:</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" placeholder="Ingresa tu correo electronico"
            autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password" placeholder="Ingresa tus credenciales">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember"
            {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">Recuerdame</label>
    </div>
    <button type="submit" class="btn btn-success btn-block">Entrar</button>
    <div class="d-flex justify-content-center forgot">
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        @endif
    </div>

</form>

@endsection
