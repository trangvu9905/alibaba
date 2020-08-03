<?php

namespace App\Http\Controllers;
use App\Http\Requests\ThemchinhanhRequest;
use App\Http\Requests\SuachinhanhRequest;
use App\Chinhanh;
use Illuminate\Http\Request;

class ChinhanhController extends Controller
{
    public function danhsachchinhanh()
    {
    	 $chinhanh= Chinhanh::all();
    	return view('admin/chinhanh/danhsachchinhanh',['chinhanh'=>$chinhanh]);
    }
    public function postthemchinhanh(ThemchinhanhRequest $request)
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
            $id = new Chinhanh;
           $id->ten=$request->name;
           $id->logo=$img;
         
           $id->diengiai=$request->diengiai;
           $id->diengiai=$request->test;
           $id->machinhanh=$request->machinhanh;
            $id->save();
           $chinhanh=Chinhanh::all();
            if ($chinhanh) {
              
                foreach ($chinhanh as $cn) {
                    $output .= '<tr>
                      <td class="text-center"><img src="http://localhost/alibaba2/public/upload/'.$cn->logo.'" alt="" width="50px"></td>
                    <td>' . $cn->ten . '</td>
                    <td>' . $cn->machinhanh . '</td>
                    <td>' . $cn->created_at . '</td>
                    <td class="text-center">
                                        <a onclick="event.preventDefault();editchinhanh('.$cn->id.')" title="Chỉnh sửa" href="#" class="edit open-modal btn btn-info" data-toggle="modal" value="'.$cn->id.'"><i class="fa fa-pencil"></i></a>
                                          <a  href="http://localhost/alibaba2/public/xoachinhanh/'.$cn->id.'" class="btn btn-info js-xoachinhanh" ><i class="fa fa-trash-o"></i></a>
                                      </td>
                    </tr>';
                }
            }
          return Response($output);
        }
    }
  
    public function suachinhanh($id)
    {
    	 $cn = Chinhanh::find($id);

        return response()->json([
            'error' => false,
            'cn'  => $cn,
        ], 200);
    }

    // post sửa chi nhánh
     public function postsuachinhanh(SuachinhanhRequest $request,$id)
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
            $id =Chinhanh::find($id);
           $id->ten=$request->name;
           $id->logo=$img;
         
           $id->diengiai=$request->test1;
           $id->machinhanh=$request->machinhanh;
            $id->save();
           $chinhanh=Chinhanh::all();
            if ($chinhanh) {
              $a="{{url('')}}";
                foreach ($chinhanh as $cn) {
                    $output .= '<tr>
                      <td class="text-center"><img src="http://localhost/alibaba2/public/upload/'.$cn->logo.'" alt="" width="120px"></td>
                    <td>' . $cn->ten . '</td>
                    <td>' . $cn->machinhanh . '</td>
                    <td>' . $cn->created_at . '</td>
                    <td class="text-center">
                                        <a onclick="event.preventDefault();editchinhanh('.$cn->id.')" title="Chỉnh sửa" href="#" class="edit open-modal btn btn-info" data-toggle="modal" value="'.$cn->id.'"><i class="fa fa-pencil"></i></a>
                                          <a  href="http://localhost/alibaba2/public/xoachinhanh/'.$cn->id.'" class="btn btn-info js-xoachinhanh" ><i class="fa fa-trash-o"></i></a>
                                      </td>
                    </tr>';
                }
            }
          return Response($output);
        }
    }
  
    public function xoachinhanh(Request $request,$id)
    {
      if ($request->ajax()) {

         $chinhanh = Chinhanh::find($id);
         if($chinhanh)
         {
         	$chinhanh->delete();
         }
         

      
      		return response(['code'=>200]);
    }
}
}
