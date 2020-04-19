<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class StudentLoginController extends Controller
{
    use AuthenticatesUsers;


    // guard del login admin (config|auth)
    protected function guard()
    {
        return Auth::guard('students');
    }

    // funcion que solo permite dejar acceder a los usuarios  si hacen sesion
    function __construct()
    {
        $this->middleware('students:students',   ['only' => ['secret']]);
        $this->middleware('auth:students',       ['only' => ['secret']]);
    }

    public function username()
    {
        return 'matricula';
    }

    // retorna a vista login que se envia desde la ruta
    public function showLoginForm()
    {
        return view('logins.login-student');
    }

    // protected $redirectTo = RouteServiceProvider::HOME; //te lleva a esa direccion cuando te logueas

    public function authenticated()
    {
        return redirect('/estudiante/area');
    }

    //
    public function secret()
    {
        return view('home');
    }

}
