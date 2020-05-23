<?php

namespace App\Http\Controllers\Admin;

use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->select('name', 'created_at')->paginate(10);
        return view('administrators.listUsers.student',compact('students'));
    }
}
