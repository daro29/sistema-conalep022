<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReportCardsController extends Controller
{

    public function index()
    {
        // $student = DB::table('students')->where('name')->get();
        return view('alumnos.ReportCards');

    }

}
