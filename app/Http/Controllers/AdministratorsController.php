<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdministratorsController extends Controller
{
    use AuthenticatesUsers;

    protected function guard()
    {
        return Auth::guard('admin');
    }

    function __construct()
    {
        $this->middleware('auth:admin', ['only' => ['secret']]);
    }

    public function showLoginForm()
    {
        return view('administrators.login');
    }

    public function authenticated()
    {
        return redirect('admin/area');
    }

    public function secret()
    {
        return 'Hola';
    }

}
