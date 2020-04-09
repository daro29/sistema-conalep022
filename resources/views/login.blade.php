@extends('general.master-login')

@section('title','Login')

@section('content-login')
<img class="wave" src="img/wave.png">
<div class="container">
    <div class="img">
        <img src="img/bg.svg">
    </div>
    <div class="login-content">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <img src="img/avatar.svg">
            <h2 class="title">Welcome</h2>
               <div class="input-div one">
                  <div class="i">
                          <i class="fas fa-user"></i>
                  </div>
                  <div class="div">
                          <h5>Name</h5>
                          <input type="text" name="name" class="input">

                  </div>
               </div>
               <div class="input-div pass">
                  <div class="i">
                       <i class="fas fa-lock"></i>
                  </div>
                  <div class="div">
                       <h5>Password</h5>
                       <input type="password" name="password" class="input">

               </div>
            </div>
            <a href="#">Forgot Password?</a>
            <input type="submit" class="btn" value="Login">
            {{-- Mensaje por si quiren acceder directamente --}}

                @if(session()->has('flash'))
                <div class="alert alert-danger" role="alert">
                    {{ session('flash') }}
                </div>
                @endif
                {!! $errors->first('name', '<div class="alert alert-danger">:message</div>') !!}
                {!! $errors->first('password', '<div class="alert alert-danger">:message</div>') !!}
        </form>
    </div>
</div>
@endsection
