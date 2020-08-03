<?php

namespace App\Http\Controllers;
use App\Http\Requests\ThemnhansuRequest;
use App\Nhan_su;
use App\Chinhanh;
use Illuminate\Http\Request;

class NhansuController extends Controller
{
    public function nhansu()
    {
    	return view('admin/nhansu/nhansu-home');
    }
     public function dsnhansu()
    {
    	$nhansu=Nhan_su::all();
    	$chinhanh=Chinhanh::all();
  	    return view('admin/nhansu/dsnhansu',['nhansu'=>$nhansu,'chinhanh'=>$chinhanh]);
    }

    public function postthemnhansu(ThemnhansuRequest $request)
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
            $ns = new Nhan_su;
            $ns->hoten=$request->name;
            $ns->hinhanh=$img;
            $ns->idchinhanh=$request->chinhanh;
            $ns->diachi=$request->diachi;
            $ns->dienthoai=$request->dienthoai;
            $ns->facebook=$request->facebook;
            $ns->email=$request->email;
            $ns->trinhdo=$request->trinhdo;
            $ns->nghiepvu=$request->nghiepvu;
            $ns->vitri=$request->vitri;
            $ns->ngaysinh=$request->ngaysinh;
            $ns->ghichu=$request->ghichu;
            $ns->gioitinh=$request->sex;
          
           $ns->save();
          
        
           
           $nhansu=Nhan_su::all();
            if ($nhansu) {

              $a="{{url('')}}";
                foreach ($nhansu as $ns) {
                	if($ns->vitri==1)
                	{
                      $chucvu='Giáo viên';
                	}
                	elseif ($ns->vitri==2) {
             	      $chucvu='Tư vấn';
                	}
                	elseif ($ns->vitri==3) {
                		$chucvu='Kế toán';
                	}
                	elseif ($ns->vitri==4) {
                		$chucvu='Quản lý';
                	}
                	else
                	{
                		$chucvu='Khác';
                	}
                    $output .= '<tr>
                      <td class="text-center"><img src="http://localhost/alibaba2/public/upload/'.$ns->hinhanh.'" alt="" width="100px"></td>
                                   <td class="text-center">'.$ns->hoten.'</td>
                                   <td class="text-center">'.$ns->dienthoai.'</td>
                                   <td class="text-center">
                                      '.$chucvu.'
                                   </td>
                     <td class="text-center">
                                       <a  onclick="event.preventDefault();editnhansu('.$ns->id.')" href="#" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Sửa</a>
                                       <a href="http://localhost/alibaba2/public/nhan-su/xoa/'.$ns->id.'" class="btn btn-default btn-sm js-xoanhansu"><i class="fa fa-times "></i> Xóa</a>
                                   </td>
                    </tr>';
                }
            }
            
           
           
          return Response($output);
        }
    }

    // xóa nhân sư
    public function xoanhansu(Request $request,$id)
    {
      if ($request->ajax()) {

         $nhansu = Nhan_su::find($id);
         if($nhansu)
         {
         	$nhansu->delete();
         }
         
      		return response(['code'=>200]);
       }
     }

     // sửa nhân sự
      public function getsuanhansu($id)
    {
    	 $ns = Nhan_su::find($id);
      
      

        return response()->json([
            'error' => false,
            'ns'  => $ns,
           
        ], 200);
    }


    public function postsuanhansu(ThemnhansuRequest $request,$id)
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
           $ns =Nhan_su::find($id);
            $ns->hoten=$request->name;
            $ns->hinhanh=$img;
            $ns->idchinhanh=$request->chinhanh;
            $ns->diachi=$request->diachi;
            $ns->dienthoai=$request->dienthoai;
            $ns->facebook=$request->facebook;
            $ns->email=$request->email;
            $ns->trinhdo=$request->trinhdo;
            $ns->nghiepvu=$request->nghiepvu;
            $ns->vitri=$request->vitri;
            $ns->ngaysinh=$request->ngaysinh;
            $ns->ghichu=$request->ghichu;
            $ns->gioitinh=$request->sex;
             $ns->updatetime=date('Y-m-d');
            $ns->save();
          
        
           
           $nhansu=Nhan_su::all();
            if ($nhansu) {

              $a="{{url('')}}";
                foreach ($nhansu as $ns) {
                	if($ns->vitri==1)
                	{
                      $chucvu='Giáo viên';
                	}
                	elseif ($ns->vitri==2) {
             	      $chucvu='Tư vấn';
                	}
                	elseif ($ns->vitri==3) {
                		$chucvu='Kế toán';
                	}
                	elseif ($ns->vitri==4) {
                		$chucvu='Quản lý';
                	}
                	else
                	{
                		$chucvu='Khác';
                	}
                    $output .= '<tr>
                      <td class="text-center"><img src="http://localhost/alibaba2/public/upload/'.$ns->hinhanh.'" alt="" width="100px"></td>
                                   <td class="text-center">'.$ns->hoten.'</td>
                                   <td class="text-center">'.$ns->dienthoai.'</td>
                                   <td class="text-center">
                                      '.$chucvu.'
                                   </td>
                     <td class="text-center">
                                       <a  onclick="event.preventDefault();editnhansu('.$ns->id.')" href="#" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Sửa</a>
                                       <a href="http://localhost/alibaba2/public/nhan-su/xoa/'.$ns->id.'" class="btn btn-default btn-sm js-xoanhansu"><i class="fa fa-times "></i> Xóa</a>
                                   </td>
                    </tr>';
                }
            }
            
           
           
          return Response($output);
        }
    }
    // tìm nhân sự
    public function timnhansu(Request $request)
    {
     if ($request->ajax()) {
           
           $output = '';
           $chinhanh=$request->chinhanh_tim;
           $vitri=$request->vitri_tim;
           $name=$request->name;
           
           	  $nhansu=Nhan_su::where([['idchinhanh', $chinhanh],['vitri', $vitri],['hoten','like','%'.$name.'%']])->get();
           
       
          if($chinhanh==0)
          {
              $nhansu=Nhan_su::where([['vitri', $vitri],['hoten','like','%'.$name.'%']])->get();
          }
            if($vitri==0)
          {
          	    $nhansu=Nhan_su::where([['idchinhanh', $chinhanh],['hoten','like','%'.$name.'%']])->get();
          }
          if($chinhanh==0 && $vitri==0)
          {
          	  $nhansu=Nhan_su::where('hoten','like','%'.$name.'%')->get();
          }
           
         
          
            if ($nhansu) {

              $a="{{url('')}}";
                foreach ($nhansu as $ns) {
                	if($ns->vitri==1)
                	{
                      $chucvu='Giáo viên';
                	}
                	elseif ($ns->vitri==2) {
             	      $chucvu='Tư vấn';
                	}
                	elseif ($ns->vitri==3) {
                		$chucvu='Kế toán';
                	}
                	elseif ($ns->vitri==4) {
                		$chucvu='Quản lý';
                	}
                	else
                	{
                		$chucvu='Khác';
                	}
                    $output .= '<tr>
                      <td class="text-center"><img src="http://localhost/alibaba2/public/upload/'.$ns->hinhanh.'" alt="" width="100px"></td>
                                   <td class="text-center">'.$ns->hoten.'</td>
                                   <td class="text-center">'.$ns->dienthoai.'</td>
                                   <td class="text-center">
                                      '.$chucvu.'
                                   </td>
                     <td class="text-center">
                                       <a  onclick="event.preventDefault();editnhansu('.$ns->id.')" href="#" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Sửa</a>
                                       <a href="http://localhost/alibaba2/public/nhan-su/xoa/'.$ns->id.'" class="btn btn-default btn-sm js-xoanhansu"><i class="fa fa-times "></i> Xóa</a>
                                   </td>
                    </tr>';
                }
            }
            
           
           
          return Response($output);
        }






    }


}
