<?php

namespace App\Http\Controllers;

use App\Group;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use App\Imports\GroupsImport;

use App\Imports\StudentsImport;
use App\Imports\SubjectsImport;
use App\Imports\TeachersImport;
use App\Imports\QualificationImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function ImportExcel(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new StudentsImport, $file);
        Excel::import(new SubjectsImport, $file);
        Excel::import(new TeachersImport, $file);
        Excel::import(new GroupsImport, $file);
        // Excel::import(new QualificationImport, $file);
        return back()->with('status', 'Datos capturados exitosamente');
    }
}
