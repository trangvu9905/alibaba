<?php

namespace App\Imports;

use App\Hocsinh;
use Maatwebsite\Excel\Concerns\ToModel;

class HocsinhsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         return new Hocsinh([
            
            'ten'    => $row[0], 
            'diachi'    => $row[1], 
            'ngaysinh'    => $row[2], 
            'type'    => $row[3], 
            
        ]);
    }
}
