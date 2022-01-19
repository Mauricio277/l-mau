<?php

namespace App\Imports;

use App\Models\Persona;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PersonaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Persona([
            "name" => $row["name"],
            "mail" => $row["mail"],
            "sueldo" => $row["sueldo"],
        ]);
    }
}
