<?php

namespace App\Imports;

use App\Qualification;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QualificationImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Qualification([
            'qualification'    => $row["procentaje"],
        ]);
    }

    public function headingRow(): int
    {
        return 8;
    }
}
