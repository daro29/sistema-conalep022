<?php

namespace App\Http\Controllers\Auth;


use App\Student;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginStudentController extends Controller
{

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('students:student',    ['only' => ['secret']]);
        $this->middleware('auth:student',        ['only' => ['secret']]);
    }

    protected function guard()
    {
        return Auth::guard('student');
    }

    public function username()
    {
        return 'enrollment';
    }

    public function showLoginForm()
    {
        return view('logins.login-student');
    }

    public function authenticated()
    {
        return redirect()->route('student.secret');
    }

    public function secret()
    {
       return view('home');
    }

    public function logout(Request $request)
    {
        $this->guard('student')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

}
