<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::select('name','created_at')->paginate(10);

        return view('administrators.listUsers.teacher',compact('teachers'));
    }
}
