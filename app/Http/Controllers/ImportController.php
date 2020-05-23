<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;
use App\Imports\TeachersImport;
use App\Imports\GroupsImport;

use App\Student;
use App\Teacher;
use App\Group;

class ImportController extends Controller
{
    public function ImportExcel(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new StudentsImport, $file);
        Excel::import(new TeachersImport, $file);
        Excel::import(new GroupsImport, $file);
        return back()->with('status', 'Datos capturados exitosamente');
    }
}
