<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class TeacherController extends Controller
{
    use AuthenticatesUsers;


    protected $guard = 'teacher';

    public function username()
    {
        return 'name';
    }

    public function login(Request $request) //Go web.php then you will find this route
    {
         $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);

    }

    public function logout(Request $request)
    {
        $this->guard('teacher')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    // funcion que solo permite dejar acceder a los usuarios  si hace sesion
    function __construct()
    {
        $this->middleware('teacher:teacher',    ['only' => ['secret']]);
        $this->middleware('auth:teacher',        ['only' => ['secret']]);
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

    protected function guard()
    {
        return Auth::guard('teacher');
    }

}
