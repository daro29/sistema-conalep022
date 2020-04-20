<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdministratorsController extends Controller
{
    use AuthenticatesUsers;


    // guard del login admin (config|auth)
    protected function guard()
    {
        return Auth::guard('admins');
    }

    // funcion que solo permite dejar acceder a los usuarios  si hace sesion
    function __construct()
    {
        $this->middleware('admins:admins',    ['only' => ['secret']]);
        $this->middleware('auth:admins',     ['only' => ['secret']]);
    }

    // retorna a vista login que se envia desde la ruta
    public function showLoginForm()
    {
        return view('logins.login-admin');
    }

    // protected $redirectTo = RouteServiceProvider::HOME; //te lleva a esa direccion cuando te logueas

    public function authenticated()
    {
        return redirect('/administrador/area');
    }

    //
    public function secret()
    {
        return view('home');
    }
}
