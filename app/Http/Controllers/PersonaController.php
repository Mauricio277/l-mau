<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PersonaExport;
use App\Imports\PersonaImport;
use Maatwebsite\Excel\Facades\Excel;

class PersonaController extends Controller
{
    //
    public function importExportView()
    {
        return view('import');
    }

    public function export()
    {
        return Excel::download(new PersonaExport, 'personas.xlsx');
    }

    public function import()
    {
        Excel::import(new PersonaImport,request()->file('file'));

        return redirect()->back();
    }
}
