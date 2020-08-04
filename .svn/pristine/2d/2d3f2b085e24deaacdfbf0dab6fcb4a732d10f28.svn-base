<?php
namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use App\Chinhanh;
use App\Chuongtrinh;
use App\Khoahoc;
use App\Lophoc;
use App\Khuyenmai;
use App\Dangky;
use Illuminate\Http\Request;
use Response;
class KhoahocController extends Controller
{
    public function getthem($id)
    {
        $idhocvien=$id;
    	$chinhanh=Chinhanh::all();
    	$chuongtrinh=Chuongtrinh::all();
        $khoahoc=Khoahoc::all();
        $lophoc=Lophoc::all();
        $khuyenmai=Khuyenmai::all();
      return view('admin/dangkykhoahoc/dkykhoahoc',['chinhanh'=>$chinhanh,'chuongtrinh'=>$chuongtrinh,'khoahoc'=>$khoahoc,'lophoc'=>$lophoc,'khuyenmai'=>$khuyenmai,'idhocvien'=>$idhocvien]);
    }
    public function postRegister(RegisterRequest $request )
    {
      if ($request->ajax()) {
            $results = [
                'id' => false
            ];
           
            $id =Dangky::insertGetId([
                'name' => $request->chinhanh,
                
            ]);

            $results['id'] = $id;

            return response()->json($results);
        }
    }

    	
  
}
