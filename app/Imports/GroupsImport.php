<?php

namespace App\Imports;

use App\Group;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;

class GroupsImport implements ToModel, WithMappedCells
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function mapping(): array
    {
        return[
            'clave' => 'B2',
        ];
    }
    public function model(array $row)
    {
        return new Group([
            'clave' => $row ['clave'],
        ]);
    }
}
