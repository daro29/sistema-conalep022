<?php

namespace App\Imports;

use App\Subject;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;

class SubjectsImport implements ToModel,WithMappedCells
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function mapping(): array
    {
        return [
            'modulo'    =>  'B3',
            'Periodo Esc.'    =>  'B5',
        ];
    }

    public function model(array $row)
    {
        return new Subject([
            'name'  =>  $row ['modulo'],
            'code'  =>  $row ['Periodo Esc.'],
        ]);
    }
}

