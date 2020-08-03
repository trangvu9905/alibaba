<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chinhanh;
use App\Chuongtrinh;
use App\Chuongtrinh_chinhanh;
use App\Khoahoc;
use App\Lophoc;
use App\Khuyenmai;
class AjaxController extends Controller
{
   public function getchuongtrinh($idchinhanh)
   {
   
      $chuongtrinh=Chuongtrinh_chinhanh::where('idchinhanh',$idchinhanh)->get();
       
      foreach ($chuongtrinh as  $ct) {
      	 echo "<option value='".$ct->idchuongtrinh."'>".$ct->idchuongtrinh->ten."</option>";
      }
   }
    public function getkhoahoc($idchuongtrinh)
   {
      $khoahoc=Khoahoc::where('idchuongtrinh',$idchuongtrinh)->get();
     
      foreach ($khoahoc as  $kh) {
      	 echo "<option value='".$kh->id."'>".$kh->ten."</option>";
      }
   }
    public function getlophoc($idkhoahoc)
   {
      $lophoc=Lophoc::where('idkhoahoc',$idkhoahoc)->get();
      $a="Chờ mở lớp";
      $b=0;
      echo "<option value='".$b."'>".$a."</option>";
      foreach ($lophoc as  $lh) {
      	 echo "<option value='".$lh->id."'>".$lh->ten."</option>";
      }
   }

    public function gethocphi($idkhoahoc)
   {
      $hocphi=Khoahoc::where('id',$idkhoahoc)->first();
     
      echo " <input  value='".$hocphi->hocphi."' type='text' class='form-control' name='hocphi' id='hp'>";
      
   }

   // chương trình hiển thị chi nhánh
   public function getchuongtrinh_chinhanh($idchuongtrinh)
   {
   
     $Chuongtrinh_chinhanh=Chuongtrinh_chinhanh::where('idchuongtrinh',$idchuongtrinh)->get();

     $chuongtrinh=Chuongtrinh::find($idchuongtrinh);
     $i=1;
      foreach ($Chuongtrinh_chinhanh as $cn) {
  
          echo  "<p>".$i." - ".$cn->Chinhanh->ten."</p>";
      $i++;
      }
   }
  
}
