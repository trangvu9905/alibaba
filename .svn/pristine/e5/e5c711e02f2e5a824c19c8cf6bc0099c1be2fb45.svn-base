<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Hocsinh;
use App\Nhan_su;
class TongquanController extends Controller
{	

	
public function admin(){
       $hocvien=Hocsinh::all();
       $count_pdk = Hocsinh::where('type2', '=', '1')->count() ;
        $count_cxl= Hocsinh::where('type2', '=', '2')->count() ;
        $count_hv = Hocsinh::where('type2', '=', '3')->count() ;
        $nhansu=Nhan_su::all();
   
      // dd($count);
      return view('admin/tongquan',['count_pdk'=>$count_pdk,'count_hv'=>$count_hv,'count_cxl'=>$count_cxl,'nhansu'=>$nhansu]);
    }
}