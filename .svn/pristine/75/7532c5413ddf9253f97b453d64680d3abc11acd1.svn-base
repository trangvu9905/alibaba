<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// phần người dùng
Route::get('index', function () {
    return view('pages/index');
});
Route::get('about', function () {
    return view('pages/about');
});
Route::get('teacher', function () {
    return view('pages/teacher');
});
Route::get('vehicle', function () {
    return view('pages/vehicle');
});
Route::get('contact', function () {
    return view('pages/contact');
});
Route::get('dangky', function () {
    return view('pages/dangky');

});
   

// chi nhánh

Route::get('chinhanh','ChinhanhController@danhsachchinhanh');
Route::post('chi-nhanh','ChinhanhController@postthemchinhanh')->name('ajax_post.themchinhanh');
Route::get('xoachinhanh/{id}','ChinhanhController@xoachinhanh')->name('ajax_xoachinhanh');
Route::get('suachinhanh/{id}','ChinhanhController@suachinhanh');
Route::post('sua-chi-nhanh/{id}','ChinhanhController@postsuachinhanh');
//
// Thêm mới học sinh

Route::get('hocvien','HocvienController@getHocvien');
Route::post('dangky','HocvienController@postHocvien');
        


// phần admin
Route::get('admin','TongquanController@admin');
Route::get('getadmin','NhansuController@admin');
Route::get('dangnhap','PagesController@getdangnhap');
Route::post('postdangnhap','PagesController@postdangnhap');

 Route::get('dshocvientiemnang', [
    'uses' => 'TasksController@index',
    'as' => 'tasks.index',
]);


// phần thêm mới , sửa , xóa học viên

 Route::group(['prefix' => 'hoc-vien'], function () {
  Route::get('home','HocvienadminController@home');
  Route::get('dshocvientiemnang','HocvienadminController@dshocvientiemnang');
  Route::post('themhocvien','HocvienadminController@postthemhocvien')->name('ajax_postthemhocvien');
  Route::get('xoahocvien/{id}','HocvienadminController@xoahocvien')->name('ajax_xoahocvien');
  Route::post('sua-hocvien/{id}','HocvienadminController@suahocvien');
  Route::get('suahocvien/{id}','HocvienadminController@show');
  Route::get('lich-su-dang-ky','HocvienadminController@lichsudangky');
  Route::post('tim-lich-su-dang-ky','HocvienadminController@timlichsudangky')->name('ajax_post.lichsudangky');
  Route::get("dshocvien",'HocvienadminController@dshocvien');
});
 

 Route::group(['prefix' => 'tasks'], function () {
    Route::get('/{id}', [
        'uses' => 'TasksController@show',
        'as'   => 'tasks.show',
    ]);
   

   
});

// export excel học viên
Route::get('exporthocsinh','ExcelController@export')->name('exporthocsinh');
Route::get('importhocsinh', 'ImportExcelController@importExportView');
Route::post('import', 'ImportExcelController@import')->name('import');


// khóa học
Route::group(['prefix' => 'dkykhoahoc'], function () {
    Route::get('getthem/{id}','KhoahocController@getthem');
});

// đăng ký khóa hoc
Route::post('dang-ky','RegisterController@postRegister')->name('ajax_post.register');
Route::post('dang-ky1','RegisterController@postRegister1')->name('ajax_post.register1');



// Đăng ký tài liệu
Route::post('dang-kytailieu','RegisterController@postdangkytailieu')->name('ajax_post.dangkytailieu');


// sử lý ajax

Route::group(['prefix' => 'ajax'], function () {
    Route::get('chuongtrinh/{idchinhanh}','AjaxController@getchuongtrinh');
    Route::get('chuongtrinh-chinhanh/{idchinhanh}','AjaxController@getchuongtrinh_chinhanh');
    Route::get('khoahoc/{idchuongtrinh}','AjaxController@getkhoahoc');
    Route::get('lophoc/{idkhoahoc}','AjaxController@getlophoc');
    Route::get('hocphi/{idkhoahoc}','AjaxController@gethocphi');
    Route::get('chietkhau/{idkhuyenmai}','AjaxController@getchietkhau');
});


// chương trình khóa học
Route::group(['prefix' => 'chuong-trinh'], function () {
    Route::get('home','ChuongtrinhKhoahocController@chuongtrinh');
    Route::get('danhsach','ChuongtrinhKhoahocController@dschuongtrinh');
    Route::post('them','ChuongtrinhKhoahocController@postthemchuongtrinh')->name('ajax_post.themchuongtrinh');
    Route::get('xoa/{id}','ChuongtrinhKhoahocController@xoachuongtrinh')->name('ajax_xoachuongtrinh');
    Route::get('getsua/{id}','ChuongtrinhKhoahocController@getsuachuongtrinh');
    Route::post('postsua/{id}','ChuongtrinhKhoahocController@postsuachuongtrinh');
    Route::get('dskhoahoc/{id}','ChuongtrinhKhoahocController@dskhoahoc');
    Route::post('them-khoahoc','ChuongtrinhKhoahocController@postthemkhoahoc')->name('ajax_post.themkhoahoc');
    Route::get('xoa-khoahoc/{id}','ChuongtrinhKhoahocController@xoakhoahoc');
    Route::get('getsua-khoahoc/{id}','ChuongtrinhKhoahocController@getsuakhoahoc');
     Route::post('postsua-khoahoc/{id}','ChuongtrinhKhoahocController@postsuakhoahoc');
});

// lop hoc
Route::group(["prefix"=> 'lop-hoc'], function(){
    Route::get('home','LophocController@home');
    Route::get('phonghoc','LophocController@phonghoc');
    Route::post('themphonghoc','LophocController@postthemphonghoc')->name('ajax_post.themphonghoc');
    Route::get('xoaphonghoc/{id}','LophocController@xoaphonghoc')->name('ajax_xoaphonghoc');
    Route::get('suaphonghoc/{id}','LophocController@suaphonghoc');
    Route::post('sua-phong-hoc/{id}','LophocController@postsuaphonghoc')->name('ajax_post.suaphonghoc');
    // chờ mở lơp
     Route::get('chomolop','LophocController@chomolop');
     Route::get('dschomolop/{id}','LophocController@dschomolop');
     Route::get('hienthilophoc/{id}','LophocController@hienthilophoc');
    
     Route::post('tim','LophocController@timphonghoc')->name('ajax_post.timphonghoc');
     // lớp dang học
     Route::get('lopdanghoc','LophocController@lopdanghoc');
     Route::get('xoalophoc/{id}','LophocController@xoalophoc')->name('ajax_xoalophoc');
     Route::post('timlophoc','LophocController@timlophoc')->name('ajax_post.timlophoc');
     //lop kết thúc
     Route::get('lopketthuc','LophocController@lopketthuc');
     Route::get('xoalophockt/{id}','LophocController@xoalophockt')->name('ajax_xoalophockt');
     Route::post('timlophockt','LophocController@timlophockt')->name('ajax_post.timlophockt');
     // thêm mới lớp hoc
     Route::post('them-lop-hoc','LophocController@postthemlophoc')->name('ajax_post.themlophoc');
     Route::post('khaigianglop/{id}','LophocController@khaigianglop');
     Route::get('getkhaigianglop/{id}','LophocController@getkhaigianglop');
     // tìm kiếm khóa học đăng kí
     Route::post('tim-khoa-hoc-dang-ky','LophocController@timkhoahocdangki')->name('ajax_post.timkhoahocdangki');

});

// nhân sự
Route::group(['prefix' => 'nhan-su'], function () {
    Route::get('home','NhansuController@nhansu');
    Route::get('danhsach','NhansuController@dsnhansu');
    Route::post('them','NhansuController@postthemnhansu')->name('ajax_post.themnhansu');
    Route::get('xoa/{id}','NhansuController@xoanhansu')->name('ajax_xoanhansu');
    Route::get('getsua/{id}','NhansuController@getsuanhansu');
    Route::post('postsua/{id}','NhansuController@postsuanhansu');
    Route::post('tim','NhansuController@timnhansu')->name('ajax_post.timnhansu');
  
});
?>