<?php

namespace App\Exports;

use App\Hocsinh;
use Maatwebsite\Excel\Concerns\FromCollection;

class HocsinhsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Hocsinh::all();
    }
        public function headings(): array {
        return [
            'id',
            'tên',
            'email',    
         
        ];
    }
 
    public function map($hocsinh): array {
        return [
           $hocsinh->id,
           $hocsinh->ten,
           $hocsinh->email
        ];
    }

}
