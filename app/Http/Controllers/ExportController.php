<?php

namespace App\Http\Controllers;
use App\Exports\DashboardExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportExcel()
    {
        return Excel::download(new DashboardExport, 'users.xlsx');
    }
}
