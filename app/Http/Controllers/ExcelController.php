<?php
use Illuminate\Support\Facades\Response;
namespace App\Http\Controllers;
use App\Exports\DashboardExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
    
    public function export()
    {
        return Excel::download(new DashboardExport, 'dashboard.xlsx');
    }
}
