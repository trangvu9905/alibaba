<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hocsinh;

class HocvienController extends Controller

{
	// đăng nhập
  public function getHocvien()
  {
    // return view('admin/dangnhap');
  }
    public function postHocvien(Request $request)
    {     
      $this->validate($request,
      [
       'fullname'=>'required',
       'sex'=>'required',
       'birthday'=>'required',
       'andress'=>'required',
       'job'=>'required',
       ],
      [
       'fullname.required'=>'Bạn chưa nhập trường Họ Tên',
       'sex.required'=>'Bạn chưa chọn giới tính',
       'birthday.required'=>'Bạn chưa nhập trường ngày sinh',
       'andress.required'=>'Bạn chưa nhập trường địa chỉ',
       'job.required'=>'Bạn chưa chưa chọn nghề nghiệp',
      ]);
      // dd($request->all());
        $strbirthday= $request->birthday;
        
        $strday=(explode('/',$strbirthday));
        $birthday=$strday[2]."-".$strday[1]."-".$strday[0];
        

       $hocvien=new Hocsinh;
       $hocvien->ten=$request->fullname;
       $hocvien->sex=$request->sex;
       $hocvien->ngaysinh=$birthday;    
       $hocvien->tuoi=$request->tuoi;
       $hocvien->diachi=$request->andress;
       $hocvien->type=$request->job;
       if($request->job == 1){
        $hocvien->PHHS_ten=$request->fullname2;
        $hocvien->dienthoai=$request->telephone;
        $hocvien->email=$request->email;
        $hocvien->tuoi2=$request->tuoi2;
        $hocvien->job=$request->job2;
       }
       if($request->job == 2){
        $hocvien->truong=$request->school;
        $hocvien->email=$request->telephone2;
        $hocvien->dienthoai=$request->telephone1;
       }
       if($request->job == 3){
        $hocvien->email=$request->email2;
        $hocvien->dienthoai=$request->email1;
        $hocvien->job=$request->job3;
       }
       $hocvien->type2= '1';
       $hocvien->save();

       return redirect('about');

}
}
