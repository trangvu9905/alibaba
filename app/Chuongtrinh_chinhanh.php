<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chuongtrinh_chinhanh extends Model
{
    protected $table="chuongtrinh_chinhanh";
    public function Chinhanh()
    {
     return $this->belongsTo('App\Chinhanh','idchinhanh','id');
    }
}
