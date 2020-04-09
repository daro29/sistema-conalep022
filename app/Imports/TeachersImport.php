<?php

namespace App\Imports;

use App\Teacher;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;

class TeachersImport implements ToModel, WithMappedCells
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function mapping(): array
    {
        return [
            'nombre' => 'B1',
        ];
    }
    public function model(array $row)
    {
        return new Teacher([
            'nombre' => $row ['nombre'],
        ]);
    }
}