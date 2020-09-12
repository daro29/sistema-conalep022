<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReportCardsPartialController extends Controller
{

    public function index()
    {
        return view('alumnos.ReportCardsPartial');

    }

}
