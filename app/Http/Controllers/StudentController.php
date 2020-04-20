<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class StudentController extends Controller
{
    use AuthenticatesUsers;

    public function username()
    {
        return 'matricula';
    }
    // guard del login admin (config|auth)
    protected $guard = 'students';

    protected function guard()
    {
        return Auth::guard($this->guard);
    }

    // funcion que solo permite dejar acceder a los usuarios  si hace sesion
    function __construct()
    {
        $this->middleware('students:students',    ['only' => ['secret']]);
        $this->middleware('auth:students',        ['only' => ['secret']]);
    }

    // retorna a vista login que se envia desde la ruta
    public function showLoginForm()
    {
        return view('logins.login-student');
    }


    public function authenticated()
    {
        return redirect('/alumno/area');
    }


    public function secret()
    {
        return view('home');
    }

}
