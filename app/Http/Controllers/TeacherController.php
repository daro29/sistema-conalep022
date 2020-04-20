<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class TeacherController extends Controller
{
    use AuthenticatesUsers;

    public function username()
    {
        return 'name';
    }
    // guard del login admin (config|auth)
    protected $guard = 'teachers';

    protected function guard()
    {
        return Auth::guard($this->guard);
    }

    // funcion que solo permite dejar acceder a los usuarios  si hace sesion
    function __construct()
    {
        $this->middleware('teachers:teachers',    ['only' => ['secret']]);
        $this->middleware('auth:teachers',        ['only' => ['secret']]);
    }

    // retorna a vista login que se envia desde la ruta
    public function showLoginForm()
    {
        return view('logins.login-teacher');
    }


    public function authenticated()
    {
        return redirect('/docente/area');
    }


    public function secret()
    {
        return view('home');
    }

}
