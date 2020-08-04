<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Imports\HocsinhsImport;
use Maatwebsite\Excel\Facades\Excel;




class ImportExcelController extends Controller
{
      public function importExportView()
    {
       return view('import');
    }
     public function import() 
    {
        Excel::import(new HocsinhsImport,request()->file('file'));
           
        return back();
    }
}

