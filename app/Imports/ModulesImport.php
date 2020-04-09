<?php

namespace App\Imports;

use App\Module;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;

class ModulesImport implements WithMappedCells, ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function mapping(): array
    {
        return [
            'nombre'  => 'B3',
        ];
    }

    public function model(array $row)
    {
        return new Module([
            'nombre' => $row['nombre'],
        ]);
    }
}
