<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class TeacherLoginController extends Controller
{
    use AuthenticatesUsers;


    // guard del login admin (config|auth)
    protected function guard()
    {
        return Auth::guard('teachers');
    }

    // funcion que solo permite dejar acceder a los usuarios  si hacen sesion
    function __construct()
    {
        $this->middleware('teachers:teachers',   ['only' => ['homeTeacher']]);
        $this->middleware('auth:teachers',       ['only' => ['homeTeacher']]);
    }

    public function username()
    {
        return 'nombre';
    }

    // retorna a vista login que se envia desde la ruta
    public function showLoginForm()
    {
        return view('logins.login-teacher');
    }

    // protected $redirectTo = RouteServiceProvider::HOME; //te lleva a esa direccion cuando te logueas

    public function authenticated()
    {
        return redirect('/docente/area');
    }

    //
    public function homeTeacher()
    {
        return view('home');
        // return 'Hola' . auth('teachers')->user()->nombre;
    }

}
