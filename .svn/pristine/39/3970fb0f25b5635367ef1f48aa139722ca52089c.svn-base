<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ThemhocvienRequest;
use App\User;
use App\Dangki;
use App\Hocsinh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(RegisterRequest $request)
    {
        if ($request->ajax()) {
            $results = [
                'id' => false
            ];
          
            $id = new Dangki;
            $id->idchinhanh=$request->chinhanh;
            $id->idhocsinh=$request->hocvien;
            $id->idchuongtrinh=$request->chuongtrinh;
            $id->idkhoahoc=$request->khoahoc;
            $id->idlop=$request->lophoc;
            $id->idkhuyenmai=$request->khuyenmai;
            $id->hocthu=$request->hocthu;
            $id->giam=$request->giam;
            $id->hocphi=$request->hocphi;
            $id->tonghocphi=$request->phaithu;
             $id->save();

             // thêm tài khoản cho học viên
             $user =  User::insertGetId([
                'name'     => $request->hocvien,
                
                'password' => Hash::make('123456'),
                'type'=>'2',
            ]);

             // Trở thành học viên chinh thức
             $hocsinh= Hocsinh::find($request->hocvien);
             $hocsinh->xacnhanhocvien=1;
             $hocsinh->save();
            $results['id'] = $id;

            return response()->json($results);
        }
    }
    // thêm mới học viên
    public function postthemhocvien(ThemhocvienRequest $request)
    {
       
         if ($request->ajax()) {

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
        
        
        
           $tasks = new Hocsinh;
           $tasks->ten=$request->fullname;
           $tasks->imageupload=$img;
           $tasks->ngaysinh= $request->birthday;
           $tasks->sex=$request->sex;
           $tasks->tuoi=$request->tuoi;
           $tasks->diachi=$request->andress;
           $tasks->type=$request->job;
        if($request->job == '1'){
            $tasks->PHHS_ten=$request->fullname2;
            $tasks->dienthoai=$request->telephone;
            $tasks->email=$request->email;
            $tasks->tuoi2=$request->tuoi2;
           $tasks->job=$request->job2;
        }
       if($request->job == '2'){
         $tasks->truong=$request->school;
         $tasks->email=$request->email1;
         $tasks->dienthoai=$request->telephone1;
       }
       if($request->job == '3'){
         $tasks->email=$request->email2;
         $tasks->dienthoai=$request->telephone2;
         $tasks->job=$request->job3;
       }
         $tasks->type2= '1';
         $tasks->xacnhanhocvien=0;
         $tasks->save();
         $output='';
    
           $tasks=Hocsinh::all();
           if ($tasks) {
                foreach ($tasks as $task) {
                    if($task->sex==1)
                    {
                        $sex='nam';
                    }
                    else
                    {
                        $sex='nữ';
                    }
                    $output .= '<tr>
                    <td> <img src="images/avatar.png" alt="" width="30px"> </td>
                    <td>' . $task->ten . '</td>
                    <td>' . $task->tuoi . '</td>
                    <td>' . $sex. '</td>
                    <td>' . $task->ngaysinh . '</td>
                    <td>' . $task->diachi . '</td>
                    <td>' . $task->dienthoai . '</td>
                    <td></td>
                    <td></td>
                     <td class="text-center"><a href="dkykhoahoc/getthem/'.$task->id.'"class="btn btn-success" >Đăng kí khóa học</a></td>
                     <td class="text-center">
                            <a onclick="event.preventDefault();editTaskForm('.$task->id.');" href="#" class=" btn btn-info" data-toggle="modal" value="{{$task->id}}"><i class="fa fa-pencil"></i></a>
                            <a  href="http://localhost/alibaba2/public/xoahocvien/'.$task->id.'" class="btn btn-info js-xoahocvien" ><i class="fa fa-trash-o"></i></a>
                            </td>
                    </tr>';
                }
            }
            return response($output);
        }




    }
    public function suahocvien(ThemhocvienRequest $request,$id)
    {
          if ($request->ajax()) {

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
        
        
        
           $tasks= Hocsinh::find($id);
           $tasks->ten=$request->fullname;
           $tasks->imageupload=$img;
           $tasks->ngaysinh= $request->birthday;
           $tasks->sex=$request->sex;
           $tasks->tuoi=$request->tuoi;
           $tasks->diachi=$request->andress;
           $tasks->type=$request->job;
        if($request->job == '1'){
            $tasks->PHHS_ten=$request->fullname2;
            $tasks->dienthoai=$request->telephone;
            $tasks->email=$request->email;
            $tasks->tuoi2=$request->tuoi2;
           $tasks->job=$request->job2;
        }
       if($request->job == '2'){
         $tasks->truong=$request->school;
         $tasks->email=$request->email1;
         $tasks->dienthoai=$request->telephone1;
       }
       if($request->job == '3'){
         $tasks->email=$request->email2;
         $tasks->dienthoai=$request->telephone2;
         $tasks->job=$request->job3;
       }
         $tasks->type2= '1';
         $tasks->xacnhanhocvien=0;
         $tasks->save();
         $output='';
    
           $tasks=Hocsinh::all();
           if ($tasks) {
                foreach ($tasks as $task) {
                    if($task->sex==1)
                    {
                        $sex='nam';
                    }
                    else
                    {
                        $sex='nữ';
                    }
                    $output .= '<tr>
                    <td> <img src="images/avatar.png" alt="" width="30px"> </td>
                    <td>' . $task->ten . '</td>
                    <td>' . $task->tuoi . '</td>
                    <td>' . $sex. '</td>
                    <td>' . $task->ngaysinh . '</td>
                    <td>' . $task->diachi . '</td>
                    <td>' . $task->dienthoai . '</td>
                    <td></td>
                    <td></td>
                     <td class="text-center"><a href="dkykhoahoc/getthem/'.$task->id.'"class="btn btn-success" >Đăng kí khóa học</a></td>
                     <td class="text-center">
                          <a onclick="event.preventDefault();editTaskForm('.$task->id.');" href="#" class=" btn btn-info" data-toggle="modal" value="{{$task->id}}"><i class="fa fa-pencil"></i></a>
                            <a  href="http://localhost/alibaba2/public/xoahocvien/'.$task->id.'" class="btn btn-info js-xoahocvien" ><i class="fa fa-trash-o"></i></a>
                            </td>
                    </tr>';
                }
            }
            return response($output);
        }
    }



     public function xoahocvien(Request $request,$id)
    {
      if ($request->ajax()) {

         $hocvien = Hocsinh::find($id);
         if($hocvien)
         {
            $hocvien->delete();
         }
         

      
            return response(['code'=>200]);
    }
}


    
}