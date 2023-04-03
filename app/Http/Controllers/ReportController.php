<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use DB;

class ReportController extends Controller
{
    use Exportable;
    public function exportExcel(){
        return Excel::download(new ComputadorsExport, 'computadores.xlsx');
    }
}
