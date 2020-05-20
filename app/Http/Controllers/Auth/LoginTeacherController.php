<?php

namespace App\Http\Controllers\Auth;

use App\Notice;
use App\School;
use App\Teacher;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginTeacherController extends Controller
{

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('teachers:teacher',    ['only' => ['secret']]);
        $this->middleware('auth:teacher',        ['only' => ['secret']]);
    }

    protected function guard()
    {
        return Auth::guard('teacher');
    }

    public function username()
    {
        return 'name';
    }

    public function showLoginForm()
    {
        return view('logins.login-teacher');
    }

    public function authenticated()
    {
        return redirect()->route('teacher.secret');
    }

    public function secret()
    {
        $school = School::select('name','domicile')->first();
        $notices = Notice::latest()->get();
        return view('home',compact('school','notices'));
    }

    public function logout(Request $request)
    {
        $this->guard('teacher')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
