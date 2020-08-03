<?php

namespace App\Http\Controllers;
use App\Http\Requests\ThemchuongtrinhRequest;
use App\Http\Requests\ThemkhoahocRequest;
use App\Chuongtrinh;
use App\Chuongtrinh_chinhanh;
use App\Chinhanh;
use App\Khoahoc;
use Illuminate\Http\Request;

class ChuongtrinhKhoahocController extends Controller
{
    public function chuongtrinh()
    {
    	return view('admin/chuongtrinh-khoahoc/chuongtrinh-home');
    }
     public function dschuongtrinh()
    {
    	$chinhanh=Chinhanh::all();
    	$chuongtrinh=Chuongtrinh::all();
    	return view('admin/chuongtrinh-khoahoc/dschuongtrinh',['chuongtrinh'=>$chuongtrinh,'chinhanh'=>$chinhanh]);
    }

    public function postthemchuongtrinh(ThemchuongtrinhRequest $request)
    {
      if ($request->ajax()) {
           
          $output = '';
          if($request->hasFile('img'))
          {
             
           $image=$request->img;
           $image->move(base_path('/public/upload'),$image->getClientOriginalname());
           $img=$image->getClientOriginalname();
          
         }
         else
         {
         	$img=' ';
         }
            $id = new Chuongtrinh;
           $id->ten=$request->name;
           $id->logo=$img;
           $chinhanh=$request->chinhanh;
           $id->mota=$request->gioithieu_hi;
           $id->MACT=$request->mact;
           $id->save();
          
          foreach($chinhanh as $entry){
               $ct_cn = new Chuongtrinh_chinhanh;
               $ct_cn->idchuongtrinh=$id->id;
               $ct_cn->idchinhanh=$entry;
                $ct_cn->save();
          }
           
           $chuongtrinh=Chuongtrinh::all();
            if ($chuongtrinh) {

              $a="{{url('')}}";
                foreach ($chuongtrinh as $ct) {
                	
                    $output .= '<tr>
                     <td class="text-center">' .$ct->id. '</td>
                    <td class="text-center">' . $ct->ten . '</td>
                    <td class="text-center">' . $ct->MACT . '</td>
                    <td class="text-center">' . $ct->mota . '</td>
                     <td class="text-center">
                                       <a  onclick="event.preventDefault();editchuongtrinh('.$ct->id.')" href="#" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Sửa</a>
                                       <a href="http://localhost/alibaba2/public/chuong-trinh/xoa/'.$ct->id.'" class="btn btn-default btn-sm js-xoachuongtrinh"><i class="fa fa-times "></i> Xóa</a>
                                   </td>
                    </tr>';
                }
            }
            
           
           
          return Response($output);
        }
    }

    public function xoachuongtrinh(Request $request,$id)
    {
      if ($request->ajax()) {

         $chuongtrinh = Chuongtrinh::find($id);
         if($chuongtrinh)
         {
         	$chuongtrinh->delete();
         }
          $dele= Chuongtrinh_chinhanh::where('idchuongtrinh',$id)->get();
            foreach($dele as $org) 
            {
               $org->delete();
             }
       
      		return response(['code'=>200]);
       }
     }


     public function getsuachuongtrinh($id)
    {
    	 $ct = Chuongtrinh::find($id);
       $ct_cn = Chuongtrinh_chinhanh::where('idchuongtrinh',$id)->get();
       $a=[];
       foreach ($ct_cn as  $value) {
         $a[]= $value->idchinhanh;
       }

        return response()->json([
            'error' => false,
            'ct'  => $ct,
            'a'=>$a,
        ], 200);
    }

    public function postsuachuongtrinh(ThemchuongtrinhRequest $request,$id)
    {
      if ($request->ajax()) {
           
          $output = '';
          if($request->hasFile('img'))
          {
             
           $image=$request->img;
           $image->move(base_path('/public/upload'),$image->getClientOriginalname());
           $img=$image->getClientOriginalname();
          
         }
         else
         {
         	$img=$request->img_hi;
         }
            $ct =Chuongtrinh::find($id);
            $ct->ten=$request->name;
            $ct->logo=$img;
            $chinhanh=$request->chinhanh;
            $ct->mota=$request->gioithieu_hi;
            $ct->MACT=$request->mact;
            $ct->updatetime=date('Y-m-d');
            $ct->save();
            $dele= Chuongtrinh_chinhanh::where('idchuongtrinh',$id)->get();
            foreach($dele as $org) 
            {
               $org->delete();
             }
          foreach($chinhanh as $entry){
               $ct_cn = new Chuongtrinh_chinhanh;
               $ct_cn->idchuongtrinh=$id;
               $ct_cn->idchinhanh=$entry;
                $ct_cn->save();
          }
          
            $chuongtrinh=Chuongtrinh::all();
              if ($chuongtrinh) {

              
                foreach ($chuongtrinh as $ct) {
                	
                    $output .= '<tr>
                   <td class="text-center"><img src="http://localhost/alibaba2/public/upload/'.$ct->logo.'" alt="" width="120px"></td>
                    <td>' . $ct->ten . '</td>
                    <td>' . $ct->MACT . '</td>
                    <td>' . $ct->mota . '</td>
                     <td class="text-center">
                                       <a  onclick="event.preventDefault();editchuongtrinh('.$ct->id.')" href="#" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Sửa</a>
                                       <a href="http://localhost/alibaba2/public/chuong-trinh/xoa/'.$ct->id.'" class="btn btn-default btn-sm js-xoachuongtrinh"><i class="fa fa-times "></i> Xóa</a>
                                   </td>
                    </tr>';
                }
            }
           
           
          return Response($output);
        }
    }

    public function dskhoahoc($id) 
    {
    	 
    	$output = '';
       $khoahoc=Khoahoc::where('idchuongtrinh',$id)->get();
       if ($khoahoc) {

                foreach ($khoahoc as $kh) {
                	$hocphi=number_format($kh->hocphi).' đ';
                    $output .= '<tr>
                  
                    <td class="text-center">' . $kh->ten . '</td>
                    <td class="text-center">' . $kh->makh . '</td>
                    <td class="text-center">' . $kh->capdo . '</td>
                    <td class="text-center">' . $kh->giaotrinh . '</td>
                    <td class="text-center">' . $kh->sogio . ' h</td>
                    <td class="text-center">' . $hocphi . '</td>
                     <td class="text-center">
                                       <a  onclick="event.preventDefault();editkhoahoc('.$kh->id.')" href="#" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Sửa</a>
                                       <a href="http://localhost/alibaba2/public/chuong-trinh/xoa-khoahoc/'.$kh->id.'" class="btn btn-default btn-sm js-xoakhoahoc"><i class="fa fa-times "></i> Xóa</a>
                                   </td>
                    
                    </tr>';
                }
            }
          return Response($output);
      
     }

     // khóa học
      public function postthemkhoahoc(ThemkhoahocRequest $request)
    {
      if ($request->ajax()) {
           
          $output = '';
          
            $id = new Khoahoc;
            $id->ten=$request->name;            
            $id->ghichu=$request->gioithieu_hi;
            $id->idchuongtrinh=$request->chuongtrinh;
            $id->makh=$request->makh;
            $id->capdo=$request->capdo;
            $id->sogio=$request->sogio;
            $id->hocphi=$request->hocphi;
            $id->giaotrinh=$request->giaotrinh;
            $id->save();
           
          return Response($output);
        }
    }
      public function xoakhoahoc(Request $request,$id)
    {
      if ($request->ajax()) {

         $khoahoc = Khoahoc::find($id);
         if($khoahoc)
         {
         	$khoahoc->delete();
         }
       
      		return response(['code'=>200]);
       }
     }
      public function getsuakhoahoc($id)
    {
    	 $kh = Khoahoc::find($id);

        return response()->json([
            'error' => false,
            'kh'  => $kh,
        ], 200);
    }
     public function postsuakhoahoc(ThemchuongtrinhRequest $request,$id)
     {
      if ($request->ajax()) {
           
          $output = '';
          
            $khoahoc =Khoahoc::find($id);
            $khoahoc->ten=$request->name;            
            $khoahoc->ghichu=$request->gioithieu_hi;
          
            $khoahoc->idchuongtrinh=$request->chuongtrinh;
            $khoahoc->makh=$request->makh;
            $khoahoc->capdo=$request->capdo;
            $khoahoc->sogio=$request->sogio;
            $khoahoc->hocphi=$request->hocphi;
            $khoahoc->giaotrinh=$request->giaotrinh;
            $khoahoc->updatetime=date('Y-m-d');
            $khoahoc->save();
            $idchuongtrinh= Khoahoc::find($id)->idchuongtrinh;
            $khoahoc=Khoahoc::where('idchuongtrinh',$idchuongtrinh)->get();
        if ($khoahoc) {

                foreach ($khoahoc as $kh) {
                  $hocphi=number_format($kh->hocphi).' đ';
                    $output .= '<tr>
                  
                    <td class="text-center">' . $kh->ten . '</td>
                    <td class="text-center">' . $kh->makh . '</td>
                    <td class="text-center">' . $kh->capdo . '</td>
                    <td class="text-center">' . $kh->giaotrinh . '</td>
                    <td class="text-center">' . $kh->sogio . ' h</td>
                    <td class="text-center">' . $hocphi . '</td>
                     <td class="text-center">
                                       <a  onclick="event.preventDefault();editkhoahoc('.$kh->id.')" href="#" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Sửa</a>
                                       <a href="http://localhost/alibaba2/public/chuong-trinh/xoa-khoahoc/'.$kh->id.'" class="btn btn-default btn-sm js-xoakhoahoc"><i class="fa fa-times "></i> Xóa</a>
                                   </td>
                    
                    </tr>';
                }
            }
           
          return Response($output);
        }

     }

}
