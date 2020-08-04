<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lophoc extends Model
{
    protected $table="lophoc";
    public function Chinhanh()
    {
     return $this->belongsTo('App\Chinhanh','idchinhanh','id');
    }
    public function Chuongtrinh()
    {
     return $this->belongsTo('App\Chuongtrinh','idchuongtrinh','id');
    }
    public function Khoahoc()
    {
     return $this->belongsTo('App\Khoahoc','idkhoahoc','id');
    }
}
