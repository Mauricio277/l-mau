<?php

namespace App\Exports;

use App\Models\Persona;
use Maatwebsite\Excel\Concerns\FromCollection;

class PersonaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Persona::all();
    }
}
