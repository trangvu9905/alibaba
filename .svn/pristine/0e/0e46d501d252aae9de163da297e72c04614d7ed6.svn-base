<?php



namespace App\Http\Controllers;
use App\Exports\HocsinhsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function export(Request $request)
    {
        $type = 'xlsx';
        return Excel::download(new HocsinhsExport, 'hocsinhs.'.$type);
    }
    public function import(Request $request)
    {
       Excel::load('file.xlsx', function($reader) {
    
    });
    }

}
