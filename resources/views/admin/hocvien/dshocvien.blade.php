@extends('admin.index')
@section('content')
<style>
    .dataTables_wrapper input{
        padding: 3px 5px 3px 5px !important;
    }
</style>
<section id="content">
                    <section class="hbox stretch">

                        <section class="section-layout-2">
                            
 
<script src="/Js/jquery-migrate-1.0.0.js"></script>
<script src="/module/hocvien/js/jshocvien.js"></script>
 <script src="/Js/jquery-hash.js"></script>
<section class="vbox">
    

    @include('admin.hocvien.menuhocvien')


<span id="ctl10_menutop_script_menutop"> <script>document.getElementById("menutop_search").classList.add('item-active');</script></span>
    <section class="scrollable wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <section class="panel panel-default">
                    <div class="panel-heading">
                        <p class="inline m-b-xs m-t-xs font-bold">
                            
                            TÌM KIẾM HỌC VIÊN
                        </p>
                        <div class="pull-right">
                             
                            <a href="javascript:tableToExcel()" class="btn btn-default btn-sm">
                                <i class="i i-file-excel"></i> Xuất Excel
                            </a>
                            
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    

                    <div class="table-responsive listing" id="showlist">

                        <table id="DataList" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                  <th class="text-center">Ảnh</th>
                                  <th class="text-center">Mã HV</th>
                                  <th class="text-center">Họ Tên (*)</th>
                                  <th class="text-center">Giới tính</th>
                                  <th class="text-center">Ngày sinh</th>
                                  <th class="text-center">Địa chỉ</th>
                                  <th class="text-center">Điện thoại</th>
                                  <th class="text-center">Người quản lí</th>
                                  
                                  <th class="text-center">Khóa học đăng kí</th>
                                  <th class="text-center">Chức năng</th>
                              </tr>
                               {{ csrf_field() }}
                                <thead>
                               <tbody>
                                @if($hocvientiemnang)
                                @foreach($hocvientiemnang as $task)
                                       <tr >
                                    <td class="text-center"><img src="images/avatar.png" alt="" width="30px"></td>
                                     <td class="text-center">{{$task->tuoi}}</td>
                                    <td class="text-center">{{$task->ten}}</td>
                                    
                                    <td class="text-center">
                                      @if($task->sex==1)
                                      Nam
                                      @else
                                      Nữ
                                      @endif
                                    </td>
                                    <td class="text-center">{{$task->ngaysinh}}</td>
                                    <td class="text-center">{{$task->diachi}}</td>
                                    <td class="text-center">{{$task->dienthoai}}</td>
                                    <td class="text-center"></td>
                                    
                                    <td class="text-center"><a href="dkykhoahoc/getthem/{{$task->id}}"class="btn btn-success" >Đăng kí khóa học</a></td>
                                    
                                    <td class="text-center">        <span class="input-group-btn">            <button data-toggle="dropdown" class="dropdown-toggle btn btn-xs btn-default" type="button">                <i class="i i-ellipsis"></i>            </button>            <ul class="dropdown-menu pull-right" style="text-align:left">                <li><a href="/MODULE/HOCVIEN/Print/Print_namecard.aspx?idhv=3831" target="_blank"> <i class="fa fa-print"></i> In Thẻ Học Viên</a></li>                <li><a href="javascript:Edit_hocvien('3831')"><i class="btedit fa fa-pencil"></i> Sửa thông tin</a></li>                <li><a href="javascript:Change_users('3831')"><i class="fa fa-exchange"></i> Chuyển chi nhánh</a></li>                <li><a href="javascript:del_byid('3831')"><i class="fa fa-times"></i>Xóa học viên</a></li>            </ul>        </span>    </td>
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


<div id="ctl10_Txtscript"></div>

                            <!-- /.vbox -->
                        </section>
                        <!-- /.section-layout-2 -->

                    </section>
                    <!-- /.hbox.stretch -->

                </section>
                @endsection
                 @section('script')  
                <script>                
                    $(document).ready(function() {
            $("#DataList").DataTable({
                "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Tất cả"]],
                "iDisplayLength": 10,
                "oLanguage": {
                    "sLengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
                    "oPaginate": {
                        "sFirst": "<span class='glyphicon glyphicon-step-backward' aria-hidden='true'></span>",
                        "sLast": "<span class='glyphicon glyphicon-step-forward' aria-hidden='true'></span>",
                        "sNext": "<span class='glyphicon glyphicon-triangle-right' aria-hidden='true'></span>",
                        "sPrevious": "<span class='glyphicon glyphicon-triangle-left' aria-hidden='true'></span>"
                    },
                    "sEmptyTable": "Không có dữ liệu",
                    "sSearch": "Tìm kiếm:",
                    "sZeroRecords": "Không có dữ liệu",
                    "sInfo": "Hiển thị từ _START_ đến _END_ trong tổng số _TOTAL_ ",
                    "sInfoEmpty" : "Không tìm thấy",
                    "sInfoFiltered": " (trong tổng số _MAX_ dòng)"
                }
            });
        });
                </script>
                  @endsection