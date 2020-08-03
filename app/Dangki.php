<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dangki extends Model
{
      protected $table ="dangki";
      public function Hocsinh()
      {
           
       return $this->belongsTo('App\Hocsinh','idhocsinh','id');
      }
      public function Chuongtrinh()
      {
       return $this->belongsTo('App\Chuongtrinh','idchuongtrinh','id');
      }
      public function Chinhanh()
      {
       return $this->belongsTo('App\Chinhanh','idchichinhanh','id');
      }
      public function Khoahoc()
      {
           
       return $this->belongsTo('App\Khoahoc','idkhoahoc','id');
      }
}
