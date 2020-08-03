@extends('admin.index')
@section('content')
  <section id="content">
                    <section class="hbox stretch">

                        <section class="section-layout-2">
 
<section class="vbox">
    
        <div class="row">
            <div class="col-sm-12">
                <div class="menu-option-top1 panel b-a m-b-sm">
                    <div class="row m-n">
                        
                         <div id="menutop_danhsach" class="item-menu col-md-2 b-r m-t-xs m-b-xs  ">
                            <a  href="/?mod=nhansu!danhsach" class="block hover">
                                <span class="i-s i-s-1-5x pull-left m-r-xs">
                                    <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                    <i class="fa fa-list text-white i-sm"></i>
                                </span>
                                <span class="clear">
                                    <span class="h5 block m-t-xs text-success">Danh sách</span>
                                    <small class="text-muted">Nhân sự</small>
                                </span>
                            </a>
                        </div> 
                        
                        <div id="menutop_thongke_doanhso" class="item-menu col-md-2 b-r m-t-xs m-b-xs  ">
                            <a  href="/?mod=nhansu!thongke_doanhso" class="block hover">
                                <span class="i-s i-s-1-5x pull-left m-r-xs">
                                    <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                    <i class="fa fa fa-bar-chart-o text-white i-sm"></i>
                                </span>
                                <span class="clear">
                                    <span class="h5 block m-t-xs text-success">Thống kê</span>
                                    <small class="text-muted">Nhân sự</small>
                                </span>
                            </a>
                        </div>  

                        <div id="menutop_chamcong" class="item-menu col-md-2 b-r m-t-xs m-b-xs">
                        <a href="/Default.aspx?mod=nhansu!chamcong" class="block hover">
                            <span class="i-s i-s-1-5x pull-left m-r-xs">
                                <i class="i i-hexagon2 i-s-base text-warning hover-rotate"></i>
                                <i class="fa fa-check-circle text-white i-sm"></i>
                            </span>
                            <span class="clear">
                                <span class="h5 block m-t-xs text-success">Chấm Công</span>
                                <small class="text-muted">Điểm nhân sự</small>
                            </span>
                        </a>
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    

<span id="ctl10_menu_top_script_menutop"> <script>document.getElementById("menutop_danhsach").classList.add('item-active');</script></span>
    <section class="scrollable wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <section class="panel panel-default">
                <div class="panel-heading">
                        <p class="inline m-b-xs m-t-xs font-bold">
                            
                            TÌM KIẾM NHÂN SỰ
                        </p>
                        <div class="pull-right">
                             
                            <a href="" class="btn btn-default btn-sm themnhansu" title="Thêm một nhân sự"><i class="i i-plus2"></i> Thêm nhân sự</a>

                            
                        </div>

                        <div class="clearfix"></div>
                    <div class="row wrapper">
                        <form method="post" id="form-timnhansu">
                            @csrf
                             <div class="col-sm-3"> 
                                 <div class="">
                                    <input name="name" type="text" id="searchtxt"  class="form-control" placeholder="Họ tên" value="">
                                </div>  
                        </div>
                        <div class="col-sm-3">
                            <div > 
                                <select name="vitri_tim" id="vitri_tim" class="form-control">
                                  <option value="0">Tất cả</option>
                                   <option value="1">Gi&#225;o vi&#234;n</option>
                                   <option value="2">Tư vấn</option>
                                    <option value="3">Kế to&#225;n</option>
                                    <option value="4">Quản l&#253;</option>
                                 <option value="5">Kh&#225;c</option>
                                </select> 
                            </div> 
                        </div>
                        <div class="col-sm-3">
                            <div > 
                                <select name="chinhanh_tim" id="chinhanh_tim" class="form-control">
                                   <option value="0">Tất cả</option>
                                   @foreach($chinhanh as $cn)
                                   <option value="{{$cn->id}}">{{$cn->ten}}</option>
                                   @endforeach
                                 
                                </select> 
                            </div> 
                        </div> 
                       
                     </form>
                     </div>
                    </div> 
                    <div class="table-responsive listing" > 
                        
                        <table class="table table-striped b-t b-light" id="table-nhansu">
                            <thead>
                                <tr> 
                                    <th class="th-sortable text-center" data-toggle="class">Hình đại diện
                                    </th>
                                    <th class="th-sortable text-center" data-toggle="class">Tên nhân sự
                                    </th >
                                    <th class="text-center">Số điện thoại
                                    </th > 
                                    <th class="text-center">Vị trí
                                    </th> 
                                    <th class="text-center">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody id="nhansu">
                                @if($nhansu)
                                @foreach($nhansu as $ns)
                                <tr>
                                     <td class="text-center"><img src="{{url('')}}/upload/{{$ns->hinhanh}}" alt="" width="100px"></td>
                                   <td class="text-center">{{$ns->hoten}}</td>
                                   <td class="text-center">{{$ns->dienthoai}}</td>
                                   <td class="text-center">
                                       @if($ns->vitri==1)
                                        giáo viên
                                       @elseif($ns->vitri==2)
                                        Tư vấn
                                       @elseif($ns->vitri==3)
                                       Kế toán
                                       @elseif($ns->vitri==4)
                                         Quản lý
                                         @else
                                         Khác
                                       @endif
                                      
                                      
                                   </td>
                                   <td class="text-center">
                                       <a  onclick="event.preventDefault();editnhansu({{$ns->id}})" href="#" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Sửa</a>
                                       <a href="{{ route('ajax_xoanhansu',$ns->id) }}" class="btn btn-default btn-sm js-xoanhansu"><i class="fa fa-times "></i> Xóa</a>
                                   </td>
                                  
                                </tr>
                                @endforeach
                                @endif
                               
                            </tbody>
                        </table>
                        

                    </div> 
                </section>
            </div>
        </div>
    </section>


</section>


<div id="ctl10_messent"></div>

                            <!-- /.vbox -->
                        </section>
                        <!-- /.section-layout-2 -->

                    </section>
                    <!-- /.hbox.stretch -->

                </section>
                <!-- /#content -->

<!-- modal thêm nhân sư -->
 <div class="modal fade" id="modal-themnhansu">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Thêm mới nhân sự</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="POST" id="form-themnhansu" enctype="multipart/form-data">
                        @csrf  
                
                 <div id="ctl10_formContain" class="col-md-12">
                 <div class="clear_both"></div>
                 <div class="prf-contacts sttng"><h2> Thông tin cá nhân</h2> </div>
                 <div class="col-sm-6"> 
                     <div class="form-group">
                        <label class="control-label">Ảnh đại diện </label>
                        <input type="file" name="img" id="post_zNhan_suhinhanh" class="form-control">
                         
                     </div> </div>
                   <div class="col-sm-6">
                   <div class="form-group">
                     <label class="control-label">Họ Tên </label>
                    <input type="text"  name="name" class="form-control"> 
                     <span class="error-form"></span>
                </div> 

                </div>
            
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6"> 
                    <div class="form-group">
                     <label class="control-label">Địa chỉ </label>
                        <input type="text" value="" id="zNhan_sudiachi" name="diachi" class="form-control">
                         <span class="error-form"></span> </div>
                          </div>
                        <div class=" col-sm-3">
                        <div class="form-group">
                        <label class="control-label">Ngày sinh </label>

                         <input type="text" id="datepicker" name="ngaysinh" class="form-control" />
                        </div> 
                    </div>
                        <div class=" col-sm-3"> 
                        <div class="form-group">
                         <label class="control-label">Giới tính </label> <br> 
                         <label class="checkbox-inline radio i-checks"> 
                        <input value="0" name="sex" id="zNhan_sugioitinh0" type="radio" checked="checked"><i></i>Nam</label>
                          <span style="margin-top: 10px;padding-left:5px;">
                        <label class="checkbox-inline radio i-checks"> 
                        <input value="1" name="sex" id="zNhan_sugioitinh1" type="radio"><i></i>Nữ</label>
                    </span>
                        </div> </div>
                        </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-sm-12">
                            <div class="row">
                                
                         
                        <div class="col-sm-6">
                         <div class="form-group">
                        <label class="control-label">Điện thoại </label>
                        <input type="text" value="" id="zNhan_sudienthoai" name="dienthoai" class="form-control"> 
                     <span class="error-form"></span></div> </div>
                        <div class="col-sm-6"> 
                        <div class="form-group"><label class="control-label">Facebook </label>
                        <input type="text" value="" id="zNhan_sufacebook" name="facebook" class="form-control"> </div> </div>
                           </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                
                           
                        <div class="col-sm-6"> 
                         <div class="form-group"><label class="control-label">Email </label>
                        <input type="text" value="" id="zNhan_suemail" name="email" class="form-control"> 
                     <span class="error-form"></span></div> </div>
                     <div class="col-sm-6">
                          <div class="form-group">
                      
                        <label class="control-label">Chọn chi nhánh</label>
                         <select name="chinhanh" class="form-control" id="chuongtrinh">
                            @foreach($chinhanh as $ct)
                           <option value="{{$ct->id}}">{{$ct->ten}}</option>
                          
                           @endforeach
                         </select>
                        <span class="error-form"></span>
                         
                    </div> 
                     </div>

                      </div>
                        </div>
                     <div class="clear_both"></div>
                        <div class="prf-contacts sttng"><h2> Thông tin đào tạo</h2> </div>
                        <div class="col-sm-6"> 
                            <div class="form-group">
                            <label class="control-label">Trình độ </label>
                            <select name="trinhdo" id="zNhan_sutrinhdo" class="form-control"> <option value="Đại học">Đại học</option>
                                <option value="Cao đẳng">Cao đẳng</option>
                                <option value="Trung cấp">Trung cấp</option>
                                <option value="Khác">Khác</option>
                            </select> </div> </div>
                        <div class=" col-sm-3"> <div class="form-group">
                        <label class="control-label">Nghiệp vụ </label> <br>
                        <label class="checkbox-inline radio i-checks"> 
                            <input value="Có" name="nghiepvu" id="zNhan_sunghiepvu0" type="radio" checked="checked"> <i></i>Có  </label>
                              <span style="margin-top: 10px;padding-left:5px;">
                            <label class="checkbox-inline radio i-checks"> 
                                <input value="Không " name="nghiepvu" id="zNhan_sunghiepvu1" type="radio"> <i></i>Không </label>
                            </span>
                                 </div> </div>
                                 <div class="clear"></div>
                            <div class="col-sm-6"> 
                            <div class="form-group">
                                <label class="control-label">Vị trí công việc </label>
                                <select name="vitri" id="zNhan_suvitri" class="form-control">

                                <option value="1">Giáo viên</option>
                                <option value="2">Tư vấn</option>
                                <option value="3">Kế toán</option>
                                <option value="4">Quản lý</option>
                                <option value="5">Khác</option>
                               </select> </div> </div>
                            <div class=" col-sm-6"> <div class="form-group">
                                <label class="control-label">Ghi chú </label><input type="text" value="" id="zNhan_sughichu" name="ghichu" class="form-control"> </div> </div></div>
                     <div class="clearfix" style="clear:both;text-align:center">
                   
                     </div>
            <div class="clearfix" style="clear:both;height:30px;text-align:center"> 
           </div>

                        <button type="submit" class="btn btn-primary js-btn-themnhansu">Thêm mới </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- modal sửa nhân sự -->

 <div class="modal fade" id="modal-suanhansu">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Chỉnh sửa nhân sự</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="POST" id="form-suanhansu" enctype="multipart/form-data">
                        @csrf  
                
                 <div id="ctl10_formContain" class="col-md-12">
                 <div class="clear_both"></div>
                 <div class="prf-contacts sttng"><h2> Thông tin cá nhân</h2> </div>
                 <div class="col-sm-6"> 
                     <div class="form-group">
                        <label class="control-label">Ảnh đại diện </label>
                        <input type="file" name="img" id="post_zNhan_suhinhanh" class="form-control">
                        <input type="hidden" name="img_hi" id="img_hi" class="form-control">
                         <img src="" alt="" id="img_cu" name="img_cu" width="50px">
                     </div> 
                 </div>
                   <div class="col-sm-6">
                   <div class="form-group">
                     <label class="control-label">Họ Tên </label>
                    <input type="text"  name="name" class="form-control"> 
                     <span class="error-form"></span>
                </div> 

                </div>
            
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6"> 
                    <div class="form-group">
                     <label class="control-label">Địa chỉ </label>
                        <input type="text" value="" id="zNhan_sudiachi" name="diachi" class="form-control">
                         <span class="error-form"></span> </div>
                          </div>
                        <div class=" col-sm-3">
                        <div class="form-group">
                        <label class="control-label">Ngày sinh </label>
                        <input type="text" id="datepicker1" name="ngaysinh" class="form-control" />
                        </div> 
                    </div>
                        <div class=" col-sm-3"> 
                        <div class="form-group">
                         <label class="control-label">Giới tính </label> <br> 
                        
                             <label class="checkbox-inline radio i-checks"> 
                        <input value="0" name="sex" id="zNhan_sugioitinh0" type="radio" checked="checked"> <i></i>Nam</label>
                        <span style="margin-top: 10px;padding-left:5px;">
                        <label class="checkbox-inline radio i-checks"> 
                        <input value="1" name="sex" id="zNhan_sugioitinh1" type="radio" ><i></i>Nữ </label>
                        </span>
                        </div> </div>
                        </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-sm-12">
                            <div class="row">
                        
                        <div class="col-sm-6">
                         <div class="form-group">
                        <label class="control-label">Điện thoại</label>
                        <input type="text" value="" id="zNhan_sudienthoai" name="dienthoai" class="form-control"> 
                     <span class="error-form"></span></div> </div>
                        <div class="col-sm-6"> 
                        <div class="form-group"><label class="control-label">Facebook </label>
                        <input type="text" value="" id="zNhan_sufacebook" name="facebook" class="form-control"> </div> </div>
                           </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                
                           
                        <div class="col-sm-6"> 
                         <div class="form-group"><label class="control-label">Email </label>
                        <input type="text" value="" id="zNhan_suemail" name="email" class="form-control"> 
                     <span class="error-form"></span></div> </div>
                     <div class="col-sm-6">
                          <div class="form-group">
                      
                        <label class="control-label">Chọn chi nhánh</label>
                         <select name="chinhanh" class="form-control" id="chinhanh">
                            @foreach($chinhanh as $ct)
                           <option value="{{$ct->id}}">{{$ct->ten}}</option>
                          
                           @endforeach
                         </select>
                        <span class="error-form"></span>
                         
                    </div> 
                     </div>

                      </div>
                        </div>
                     <div class="clear_both"></div>
                        <div class="prf-contacts sttng"><h2> Thông tin đào tạo</h2> </div>
                        <div class="col-sm-6"> 
                            <div class="form-group">
                            <label class="control-label">Trình độ </label>
                            <select name="trinhdo" id="trinhdo" class="form-control"> <option value="Đại học">Đại học</option>
                                <option value="Cao đẳng">Cao đẳng</option>
                                <option value="Trung cấp">Trung cấp</option>
                                <option value="Khác">Khác</option>
                            </select> </div> </div>
                        <div class=" col-sm-3"> <div class="form-group">
                        <label class="control-label">Nghiệp vụ </label> <br>
                        <label class="checkbox-inline radio i-checks"> 
                            <input value="Có" name="nghiepvu" id="zNhan_sunghiepvu0" type="radio" checked="checked"> <i></i>Có  </label>
                              <span style="margin-top: 10px;padding-left:5px;">
                            <label class="checkbox-inline radio i-checks"> 
                                <input value="Không " name="nghiepvu" id="zNhan_sunghiepvu1" type="radio"> <i></i>Không </label>
                            </span>
                                 </div> </div>
                                 <div class="clear"></div>
                            <div class="col-sm-6"> 
                            <div class="form-group">
                                <label class="control-label">Vị trí công việc </label>
                                <select name="vitri" id="vitri" class="form-control"> <option value="1">Giáo viên</option>
                                <option value="2">Tư vấn</option>
                                <option value="3">Kế toán</option>
                                <option value="4">Quản lý</option>
                                <option value="5">Khác</option>
                               </select> </div> </div>
                            <div class=" col-sm-6"> <div class="form-group">
                                <label class="control-label">Ghi chú </label><input type="text" value="" id="zNhan_sughichu" name="ghichu" class="form-control"> </div> </div></div>
                     <div class="clearfix" style="clear:both;text-align:center">
                   
                     </div>
            <div class="clearfix" style="clear:both;height:30px;text-align:center"> 
           </div>
           <input type="hidden" name="id" >
              
               
                        <button type="submit" class="btn btn-primary js-btn-suanhansu">Sửa nhân sự </button>
                    </form>
                </div>
            </div>
        </div>
    



@endsection

@section('script')
 <script type="text/javascript">


            $(document).ready(
                    function () {
                        $("#datepicker").datepicker({
                            dateFormat: 'dd-mm-yy',
                            changeMonth: true, //Tùy chọn này cho phép người dùng chọn tháng
                            changeYear: true //Tùy chọn này cho phép người dùng lựa chọn từ phạm vi năm
                        });
                    }
            );
             $(document).ready(
                    function () {
                        $("#datepicker1").datepicker({
                            dateFormat: 'dd-mm-yy',
                            changeMonth: true, //Tùy chọn này cho phép người dùng chọn tháng
                            changeYear: true //Tùy chọn này cho phép người dùng lựa chọn từ phạm vi năm
                        });
                    }
            );
      
    // thêm nhân sư
    $(function () {

        $(".themnhansu").click(function (event) {
            event.preventDefault();
            $("#modal-themnhansu").modal('show');
        })
        let URL = '{{ route('ajax_post.themnhansu') }}'
        $('.js-btn-themnhansu').click(function (e) {

            e.preventDefault();
          
            let $this = $(this);

     let $domForm = $this.closest('#form-themnhansu');
             
            
            $.ajax({
                url: URL,
                 data: new FormData($("#modal-themnhansu form")[0]),
                        contentType: false,
                        processData: false,
         method : "POST",
            }).done(function (data) {
                $("#modal-themnhansu").modal('hide');
                $("#form-themnhansu")[0].reset();
                 $('#nhansu').html(data);
            }).fail(function (data) {
                var errors = data.responseJSON;
                $.each(errors.errors, function (i, val) {
                    $domForm.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
                });
            });
        });
    })

    // xóa nhân sự
    
  $(function () {
$('body').on("click",'.js-xoanhansu',function(event){
  event.preventDefault();
  let URL=$(this).attr('href');
 
    let $this=$(this);
    $.ajax({
        url: URL,
       
      }).done(function(results){
         if(results.code==200)
         {
            $this.parents("tr").remove();
         }
      }).fail(function (data) {
       
      });

})
})

  // sửa nhân sự


  function editnhansu(ns) {

    $.ajax({

        type: 'GET',
        url: 'http://localhost:8000/alibaba2/public/nhan-su/getsua/' + ns,
        success: function(data) { 
          
            $("#form-suanhansu input[name=name]").val(data.ns.hoten);
            $("#form-suanhansu input[name=ngaysinh]").val(data.ns.ngaysinh);
            $('#form-suanhansu #chinhanh option').each(function() {
                     if($(this).val() == data.ns.idchinhanh) {
                     $(this).prop("selected", true);
               }
             });
             $('#form-suanhansu #trinhdo option').each(function() {
                     if($(this).val() == data.ns.trinhdo) {
                     $(this).prop("selected", true);
               }
             });
              $('#form-suanhansu #vitri option').each(function() {
                     if($(this).val() == data.ns.vitri) {
                     $(this).prop("selected", true);
               }
             });
             if (data.ns.sex == '0')
            $('#form-suanhansu').find(':radio[name=sex][value="0"]').prop('checked', true);
            else
             $('#form-suanhansu').find(':radio[name=sex][value="1"]').prop('checked', true);
          if (data.ns.nghiepvu == 'Có')
            $('#form-suanhansu').find(':radio[name=nghiepvu][value="Có"]').prop('checked', true);
            else
             $('#form-suanhansu').find(':radio[name=nghiepvu][value="Không "]').prop('checked', true);
            
             $("#form-suanhansu input[name=img_hi]").val(data.ns.hinhanh);
             $("#form-suanhansu input[name=diachi]").val(data.ns.diachi);
             $("#form-suanhansu input[name=dienthoai]").val(data.ns.dienthoai);
             $("#form-suanhansu input[name=email]").val(data.ns.email);
             $("#form-suanhansu input[name=facebook]").val(data.ns.facebook);
             $("#form-suanhansu input[name=ghichu]").val(data.ns.ghichu);
             $("#form-suanhansu input[name=id]").val(data.ns.id);
           
            

        $("#form-suanhansu #img_cu").attr('src','{{url("")}}/upload/'+data.ns.hinhanh);
            $('#modal-suanhansu').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

$(function () {
     
        $('.js-btn-suanhansu').click(function (e) {
      e.preventDefault();
      
      let $this = $(this);
     let $domForm = $this.closest('#form-suanhansu');
       
            
      $.ajax({
        url: 'http://localhost:8000/alibaba2/public/nhan-su/postsua/' + $("#form-suanhansu input[name=id]").val(),
         data: new FormData($("#modal-suanhansu form")[0]),
                        contentType: false,
                        processData: false,
         method : "POST",
      }).done(function (data) {
        $("#modal-suanhansu").modal('hide');
        $("#form-suanhansu")[0].reset();
         $('#nhansu').html(data);
      }).fail(function (data) {
        var errors = data.responseJSON;
        $.each(errors.errors, function (i, val) {
          $domForm.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
        });
      });
    });
  })



// tìm kiếm nhân sự

$(function () {

      
        let URL = '{{ route('ajax_post.timnhansu') }}'
        $('#chinhanh_tim').change(function (e) {

            e.preventDefault();
          
            let $this = $(this);

     let $domForm = $this.closest('#form-timnhansu');
             
            
            $.ajax({
                url: URL,
                 data: new FormData($("form")[0]),
                        contentType: false,
                        processData: false,
         method : "POST",
            }).done(function (data) {
               
                
                 $('#nhansu').html(data);
            }).fail(function (data) {
                var errors = data.responseJSON;
                $.each(errors.errors, function (i, val) {
                    $domForm.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
                });
            });
        });
       $('#vitri_tim').change(function (e) {

            e.preventDefault();
          
            let $this = $(this);

     let $domForm = $this.closest('#form-timnhansu');
             
            
            $.ajax({
                url: URL,
                 data: new FormData($("form")[0]),
                        contentType: false,
                        processData: false,
         method : "POST",
            }).done(function (data) {
               
                
                 $('#nhansu').html(data);
            }).fail(function (data) {
                var errors = data.responseJSON;
                $.each(errors.errors, function (i, val) {
                    $domForm.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
                });
            });
        });
        $('#searchtxt').keyup(function (e) {

            e.preventDefault();
          
            let $this = $(this);

     let $domForm = $this.closest('#form-timnhansu');
             
            
            $.ajax({
                url: URL,
                 data: new FormData($("form")[0]),
                        contentType: false,
                        processData: false,
         method : "POST",
            }).done(function (data) {
               
                
                 $('#nhansu').html(data);
            }).fail(function (data) {
                var errors = data.responseJSON;
                $.each(errors.errors, function (i, val) {
                    $domForm.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
                });
            });
        });

    })

    
 </script>

@endsection
