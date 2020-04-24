<?php

namespace App\Http\Controllers\Auth;

use App\Administrator;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginAdminController extends Controller
{
    use AuthenticatesUsers;

    // guard del login admin (config|auth)
    protected function guard()
    {
        return Auth::guard('admin');
    }

    // funcion que solo permite dejar acceder a los usuarios  si hace sesion
    function __construct()
    {
        $this->middleware('admins:admin',  ['only' => ['secret']]);
        $this->middleware('auth:admin',    ['only' => ['secret']]);
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

    public function secret()
    {
        return view('home');
    }

    public function logout(Request $request)
    {
        $this->guard('admin')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
