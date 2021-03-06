@extends('admin.index')
@section('content')
<section id="content">
                    <section class="hbox stretch">

                        <section class="section-layout-2">
                            

<style>
 .bg-success-aler {
       background-color: #FF0000;
color: #FFFFFF;
font-weight: bold;
padding: 5px;
border-radius: 3px;
margin-right: 2px;

    }
    .dataTables_wrapper input{
        padding: 3px 5px 3px 5px !important;
    }

</style>
<section class="vbox">
    

  @include('admin.hocvien.menuhocvien')


<span id="ctl10_menutop_script_menutop"> <script>document.getElementById("menutop_tiemnang").classList.add('item-active');</script></span>
    <section class="scrollable wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <section class="panel panel-default">
                    <div class="panel-heading">
                        <p class="inline m-b-xs m-t-xs font-bold">
                            
                          HỌC VIÊN TIỀM NĂNG
                        </p>
                        <div class="pull-right">
                            
                              <a href="importhocsinh" class="btn btn-default btn-sm"  >
                                <i class="i i-file-excel"></i> Import File
                            </a>

                            <a href="exporthocsinh" class="btn btn-default btn-sm"  >
                                <i class="i i-file-excel"></i> Xuất Excel
                            </a>
                            
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="row wrapper">
                        
                        <div class="col-sm-6">

                             
                                
                        </div>
                         <div class="col-sm-6">
                            
  <!-- Button trigger modal -->
                                       <a  href="#" class="btn btn-success pull-right themhocvien " > <span>Thêm mới </span></a>
                                        
                                        <!-- Modal -->
                                       
 <!-- END Button trigger modal -->

                        </div>
                       
                    </div>

                    <div class="table-responsive listing" id="showlist">

                        <table id="DataList" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                  <th class="text-center">Ảnh</th>
                                  <th class="text-center">Họ Tên (*)</th>
                                  <th class="text-center">Tuổi</th>
                                  <th class="text-center">Giới tính</th>
                                  <th class="text-center">Ngày sinh</th>
                                  <th class="text-center">Địa chỉ</th>
                                  <th class="text-center">Điện thoại</th>
                                  <th class="text-center">Người quản lí</th>
                                  <th class="text-center">Tư vấn</th>
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
                                     
                                    <td class="text-center">{{$task->ten}}</td>
                                    <td class="text-center">{{$task->tuoi}}</td>
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
                                    <td class="text-center"></td> 
                                    <td class="text-center"><a href="dkykhoahoc/getthem/{{$task->id}}"class="btn btn-success" >Đăng kí khóa học</a></td>
                                    
                                    <td class="text-center">
                            <a onclick="event.preventDefault();editTaskForm({{$task->id}});" href="#" class=" btn btn-info" data-toggle="modal" value="{{$task->id}}"><i class="fa fa-pencil"></i></a>
                            <a  href="{{ route('ajax_xoahocvien',$task->id) }}" class="btn btn-info js-xoahocvien" ><i class="fa fa-trash-o"></i></a>
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


                            <!-- /.vbox -->
                        </section>
                        <!-- /.section-layout-2 -->

                    </section>
                    <!-- /.hbox.stretch -->

                </section>
                <!-- /#content -->
            

<style>
    #nav {
        height: 51px;
        position: absolute;
     
        /*transition: top 0.2s ease-in-out;*/
        width: 100%;
        z-index: 100;
    }

    @media(max-width:767px) {
        #nav {
            height: auto;
            position: fixed;
            top: 46px !important;
            /*transition: top 0.2s ease-in-out;*/
            width: 50%;
            z-index: 100;
            display: none;
            border: 1px solid rgb(195, 202, 208);
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
        }

        .nav > li {
            width: 100%;
        }
    }

    #nav.active-block {
        display: block;
    }

    #nav.nav-up {
        top: -51px;
    }

    #nav.nav-down {
        top: 0;
        position: fixed;
    }

    .item-dropdown-top-menu .active {
        background-color: #dae2f1;
    }
</style>
                </section>
                <!-- /#content -->

            </section>
            <!-- /.hbox -->

        </section>
        <!-- /.vbox -->
</div>
    </section>
 
    <!-- /#wrapper -->

   
     
   
     <!-- Add Task Modal Form HTML -->


  <div id="themhocvien" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title text-center primecolor">Thêm mới học viên</h3>
            </div>
            
            <div class="modal-body" style="overflow: hidden;">
             
              
                   <form action="" method="POST" id="form-themhocvien" enctype="multipart/form-data">
                        @csrf
           
                     <div class="row">
        <div class="col-xs-12 col-md-12">
          <!-- TÊN -->
          <div class="col-xs-6 col-md-6"> 
            <span>Họ Tên</span>
            <input class="form-control" name="fullname" placeholder="Họ Tên"  autofocus="" type="text"> 
            <span class="error-form"></span>
          </div> 
          <!-- Giới tính -->
          <div class="col-xs-6 col-md-6">
            <p>Giới Tính</p>
            <label class="radio-inline"><input name="sex" id="inlineCheckbox1" value="1" type="radio" >Nam </label> 
            <label class="radio-inline"><input name="sex" id="inlineCheckbox2" value="2" type="radio">Nữ </label> 
          </div>
        </div> 

        <!-- ngày sinh -->
        <div class="col-md-12 col-xs-12">
         <div class="col-xs-6 col-md-6"> 
          <span>Ngày sinh</span>
          <input class="form-control datepicker" name="birthday" id="ngaysinh1"  autofocus="" type="text" onchange="myFunction1()"> 
        </div>
        <!-- ảnh -->
        <div class="col-xs-6 col-md-6"> 
        <span>Tuổi</span>
          <input class="form-control" name="tuoi" id="tuoi1" readonly> 
          
        </div>
      </div>
       <!-- ảnh -->
       <div class="col-xs-12 col-md-12"> 
        <div class="col-xs-12 col-md-12"> 
          <span>Ảnh</span>
          <input type="file" class="form-control" name="img" placeholder="anh" type="text"> 
        </div>
      </div>
      <!-- địa chi -->
      <div class="col-md-12 col-xs-12">
       <div class="col-xs-12 col-md-12 "> 
        <span>Địa chỉ</span>
        <input class="form-control" name="andress" placeholder="Địa chỉ"  autofocus="" type="text"> 
      </div>
    </div>


    
    <!-- nghề nghiệp -->
    <div class="col-md-12 col-xs-12">
      <div class="col-xs-6 col-md-8">
        <p>Nghề nghiệp</p>
        <label class="radio-inline"><input name="job" id="hocsinh1" value="1" type="radio" >Học sinh</label> 
        <label class="radio-inline"><input name="job" id="sinhvien1" value="2" type="radio">Sinh viên</label> 
        <label class="radio-inline"><input name="job" id="dilam1" value="3" type="radio">Người đi làm</label> 
        </div>
      </div>
      <!-- đối vs học sinh -->
      <!-- thông tin phụ huynh -->
      <div id="student1" style="display: none">
       <div class="col-md-12 col-xs-12">
         <h3>Thông tin phụ huynh</h3>
       </div>
       <div class="col-md-12 col-xs-12">
        <div class="col-xs-6 col-md-6"> 
          <span>Họ tên phụ huynh</span>
          <input class="form-control" name="fullname2" placeholder="Họ tên phụ huynh"  autofocus="" type="text"> 
        </div>
        <div class="col-xs-6 col-md-6"> 
          <span>Số điện thoại</span>
          <input class="form-control" name="telephone" placeholder="Số điện thoại"  autofocus="" type="text"> 
        </div>
      </div>
      <!-- email -->
    <div class="col-md-12 col-xs-12">
      <div class="col-xs-6 col-md-6"> 
        <span>Email</span>
        <input class="form-control" name="email" placeholder="Email" type="email"> 
      </div>
       <!-- tuổi -->
      <div class="col-xs-6 col-md-6"> 
          <span>Tuổi</span>
          <input class="form-control" name="tuoi2" placeholder="Tuổi"  autofocus="" type="text"> 
        </div>
    </div>
     <!-- nghề nghiệp -->
      <div class="col-md-12 col-xs-12">
        
      
        <div class="col-xs-12 col-md-12"> 
          <span>Nghề Nghiệp</span>
          <input class="form-control" name="job2" placeholder="Nghề Nghiệp"  autofocus="" type="text"> 
        </div>
      </div>
     
     
    </div>
    <!-- thông tin sinh viên -->
    <div  id="alumnus1"   style="display: none">
       <div class="col-md-12 col-xs-12">
         <h3>Thông tin sinh viên</h3>
       </div>
       <div class="col-md-12 col-xs-12">
        <div class="col-xs-12 col-md-12"> 
          <span>Trường</span>
          <input class="form-control" name="school" placeholder="Trường"  autofocus="" type="text"> 
        </div>
      </div>
      <div class="col-md-12 col-xs-12">
      <div class="col-xs-6 col-md-6"> 
        <span>Email</span>
        <input class="form-control" name="email1" placeholder="Email" type="email"> 
      </div>
       <!-- tuổi -->
      <div class="col-xs-6 col-md-6"> 
          <span>Số điện thoại</span>
          <input class="form-control" name="telephone1" placeholder="Số điện thoại"  autofocus="" type="text"> 
        </div>
    </div>
      
    </div>
    <!-- người đã đi làm -->
    <div id="person1" style="display: none" >
       <div class="col-md-12 col-xs-12">
         <h3>Thông tin </h3>
       </div>
       <!-- email -->
        <div class="col-md-12 col-xs-12">
      <div class="col-xs-6 col-md-6"> 
        <span>Email</span>
        <input class="form-control" name="email2" placeholder="Email" type="email"> 
      </div>
       <!-- tuổi -->
      <div class="col-xs-6 col-md-6"> 
          <span>Số điện thoại</span>
          <input class="form-control" name="telephone2" placeholder="Số điện thoại"  autofocus="" type="text"> 
        </div>
    </div>
       <!-- công viêc -->
       <div class="col-md-12 col-xs-12">

        <div class="col-xs-12 col-md-12"> 
          <span>Nghề nghiệp</span>
          <input class="form-control" name="job3" placeholder="Nghề nghiệp"  autofocus="" type="text"> 
        </div>
        </div>
      
      <!-- công ty -->
       </div>
    
                   
                </div>
                <p></p>
            <div class="col-sm-12">
                <div class="form-group">
                      <button type="submit" class="btn btn-primary js-themhocvien">Thêm mới học viên
                      </button>

                </div>
            </div>

                    </form>
               
            </div>
        </div>

    </div>
</div>

<!-- Edit Modal hoc vien  -->
<div class="modal fade" id="edit-hocvien-Modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmEditTask" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h2 class="modal-title">
                        Sửa thông tin học viên
                    </h2>
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" id="edit-error-bag">
                        <ul id="edit-task-errors">
                        </ul>
                    </div>
                      <div class="row">
        <div class="col-xs-12 col-md-12">
          <!-- TÊN -->
          <div class="col-xs-6 col-md-6"> 
            <span>Họ Tên</span>
            <input class="form-control" name="fullname" placeholder="Họ Tên"  autofocus="" type="text"> 
          </div> 
          <!-- Giới tính -->
          <div class="col-xs-6 col-md-6">
            <p>Giới Tính</p>
            <label class="radio-inline"><input name="sex" id="inlineCheckbox1" value="1" type="radio" >Nam </label> 
            <label class="radio-inline"><input name="sex" id="inlineCheckbox2" value="2" type="radio">Nữ </label> 
          </div>
        </div> 

        <!-- ngày sinh -->
        <div class="col-md-12 col-xs-12">
         <div class="col-xs-6 col-md-6"> 
          <span>Ngày sinh</span>
          <input class="form-control datepicker" name="birthday" id="ngaysinh" placeholder="Ngày sinh" autofocus="" type="text" onchange="myFunction()"> 
        </div>
        <!-- ảnh -->
        <div class="col-xs-6 col-md-6"> 
        <span>Ngày sinh</span>
          <input class="form-control" name="tuoi" id="tuoi" readonly> 
          
        </div>
      </div>
       <!-- ảnh -->
       <div class="col-xs-12 col-md-12"> 
        <div class="col-xs-12 col-md-12"> 
          <span>Ảnh</span>
          <input type="file" class="form-control" name="img" placeholder="anh" > 
          <input type="hidden" name="img_hi" >
         
        </div>
      </div>
      <!-- địa chi -->
      <div class="col-md-12 col-xs-12">
       <div class="col-xs-12 col-md-12 "> 
        <span>Địa chỉ</span>
        <input type="text" class="form-control" name="andress" placeholder="Địa chỉ"  autofocus="" > 
      </div>
    </div>


    
    <!-- nghề nghiệp -->
    <div class="col-md-12 col-xs-12">
      <div class="col-xs-6 col-md-8">
        <p>Nghề nghiệp</p>
        <label class="radio-inline"><input name="job" id="hocsinh" value="1" type="radio" >Học sinh</label> 
        <label class="radio-inline"><input name="job" id="sinhvien" value="2" type="radio">Sinh viên</label> 
        <label class="radio-inline"><input name="job" id="dilam" value="3" type="radio">Người đi làm</label> 
        </div>
      </div>
      <!-- đối vs học sinh -->
      <!-- thông tin phụ huynh -->
      <div id="student" style="display: none">
       <div class="col-md-12 col-xs-12">
         <h3>Thông tin phụ huynh</h3>
       </div>
       <div class="col-md-12 col-xs-12">
        <div class="col-xs-6 col-md-6"> 
          <span>Họ tên phụ huynh</span>
          <input class="form-control" name="fullname2" placeholder="Họ tên phụ huynh"  autofocus="" type="text"> 
        </div>
        <div class="col-xs-6 col-md-6"> 
          <span>Số điện thoại</span>
          <input class="form-control" name="telephone" placeholder="Số điện thoại"  autofocus="" type="text"> 
        </div>
      </div>
      <!-- email -->
    <div class="col-md-12 col-xs-12">
      <div class="col-xs-6 col-md-6"> 
        <span>Email</span>
        <input class="form-control" name="email" placeholder="Email" type="email"> 
      </div>
       <!-- tuổi -->
      <div class="col-xs-6 col-md-6"> 
          <span>Tuổi</span>
          <input class="form-control" name="tuoi2" placeholder="Tuổi"  autofocus="" type="text"> 
        </div>
    </div>
     <!-- nghề nghiệp -->
      <div class="col-md-12 col-xs-12">
        
      
        <div class="col-xs-12 col-md-12"> 
          <span>Nghề Nghiệp</span>
          <input class="form-control" name="job2" placeholder="Nghề Nghiệp"  autofocus="" type="text"> 
        </div>
      </div>
     
     
    </div>
    <!-- thông tin sinh viên -->
    <div  id="alumnus"   style="display: none">
       <div class="col-md-12 col-xs-12">
         <h3>Thông tin sinh viên</h3>
       </div>
       <div class="col-md-12 col-xs-12">
        <div class="col-xs-12 col-md-12"> 
          <span>Trường</span>
          <input class="form-control" name="school" placeholder="Trường"  autofocus="" type="text"> 
        </div>
      </div>
      <div class="col-md-12 col-xs-12">
      <div class="col-xs-6 col-md-6"> 
        <span>Email</span>
        <input class="form-control" name="email1" placeholder="Email" type="email"> 
      </div>
       <!-- tuổi -->
      <div class="col-xs-6 col-md-6"> 
          <span>Số điện thoại</span>
          <input class="form-control" name="telephone1" placeholder="Số điện thoại"  autofocus="" type="text"> 
        </div>
    </div>
      
    </div>
    <!-- người đã đi làm -->
    <div id="person" style="display: none" >
       <div class="col-md-12 col-xs-12">
         <h3>Thông tin </h3>
       </div>
       <!-- email -->
        <div class="col-md-12 col-xs-12">
      <div class="col-xs-6 col-md-6"> 
        <span>Email</span>
        <input class="form-control" name="email2" placeholder="Email" type="email"> 
      </div>
       <!-- tuổi -->
      <div class="col-xs-6 col-md-6"> 
          <span>Số điện thoại</span>
          <input class="form-control" name="telephone2" placeholder="Số điện thoại"  autofocus="" type="text"> 
        </div>
    </div>
       <!-- công viêc -->
       <div class="col-md-12 col-xs-12">

        <div class="col-xs-12 col-md-12"> 
          <span>Nghề nghiệp</span>
          <input class="form-control" name="job3" placeholder="Nghề nghiệp"  autofocus="" type="text"> 
        </div>
        </div>
      
      <!-- công ty -->
    </div>
    
                   
                </div>
                </div>
                <div class="modal-footer">
                    <input name="id" type="hidden" >
                        <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                            <button class="btn btn-info" id="btn-edit-hocvien" type="button" value="add">
                               Sửa thông tin
                            </button>
                        </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
  
  @section('script')  
    
     <script>
     $(document).ready(
                    function () {
                        $(".datepicker").datepicker({
                            dateFormat: 'dd-mm-yy',
                            changeMonth: true, //Tùy chọn này cho phép người dùng chọn tháng
                            changeYear: true //Tùy chọn này cho phép người dùng lựa chọn từ phạm vi năm
                        });
                    }
            );
            


    function myFunction1() {
      var x = document.getElementById("ngaysinh1").value;
     
      var y = x.slice(6,10);
      
      var d = new Date();
      var c= d.getFullYear();
    
      var age= c-y;
      document.getElementById("tuoi1").value = age;
    }

  </script>
  <script language="javascript">

    document.getElementById("hocsinh1").onclick = function () {
        document.getElementById("student1").style.display = 'block';
        document.getElementById("alumnus1").style.display = 'none';
        document.getElementById("person1").style.display = 'none';
    };

    document.getElementById("sinhvien1").onclick = function () {
        document.getElementById("alumnus1").style.display = 'block';
        document.getElementById("person1").style.display = 'none';
        document.getElementById("student1").style.display = 'none';

    };
    document.getElementById("dilam1").onclick = function () {
        document.getElementById("person1").style.display = 'block';
        document.getElementById("student1").style.display = 'none';
        document.getElementById("alumnus1").style.display = 'none';
      
  };

</script>

   <script>
    function myFunction() {
      var x = document.getElementById("ngaysinh").value;
      
      var y = x.slice(6,10);
    
      var d = new Date();
      var c= d.getFullYear();
    
      var age= c-y;
      document.getElementById("tuoi").value = age;
    }

  </script>
  <script language="javascript">

    document.getElementById("hocsinh").onclick = function () {
        document.getElementById("student").style.display = 'block';
        document.getElementById("alumnus").style.display = 'none';
        document.getElementById("person").style.display = 'none';
    };

    document.getElementById("sinhvien").onclick = function () {
        document.getElementById("alumnus").style.display = 'block';
        document.getElementById("person").style.display = 'none';
        document.getElementById("student").style.display = 'none';

    };
    document.getElementById("dilam").onclick = function () {
        document.getElementById("person").style.display = 'block';
        document.getElementById("student").style.display = 'none';
        document.getElementById("alumnus").style.display = 'none';
      
  };

</script>

<script type="text/javascript">
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
    <!-- thêm mới hoc viên -->
   <script type="text/javascript">
        $(function () {

        $(".themhocvien").click(function (event) {
            event.preventDefault();
            $("#themhocvien").modal('show');
        })
        let URL = '{{ route('ajax_postthemhocvien') }}'
        $('.js-themhocvien').click(function (e) {
            e.preventDefault();
            let $this = $(this);
            let $domForm = $this.closest('form');

            $.ajax({
                url: URL,
              data: new FormData($("#themhocvien form")[0]),
                        contentType: false,
                        processData: false,
                method : "POST",
            }).done(function (data) {
                $("#themhocvien").modal('hide');
                $("#form-themhocvien")[0].reset();
                $('tbody').html(data);

            }).fail(function (data) {
                var errors = data.responseJSON;
                $.each(errors.errors, function (i, val) {
                    $domForm.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
                });
            });
        });
    })

    </script>
    <!-- xóa học viên -->
    <script type="text/javascript">
    // sửa học viên
    function editTaskForm(task_id) {

$.ajax({

    type: 'GET',
    url: 'http://localhost:8000/alibaba2/public/hoc-vien/suahocvien/' + task_id,
    success: function(data) {
        $("#edit-error-bag").hide();
        $("#frmEditTask input[name=fullname]").val(data.task.ten);

        if (data.task.sex == '1')
        $('#frmEditTask').find(':radio[name=sex][value="1"]').prop('checked', true);
        else
         $('#frmEditTask').find(':radio[name=sex][value="2"]').prop('checked', true);
        if (data.task.type == '1')
        {
            $("#frmEditTask input[name=fullname2]").val(data.task.PHHS_ten);
            $("#frmEditTask input[name=telephone]").val(data.task.dienthoai);
            $("#frmEditTask input[name=email]").val(data.task.email);
            $("#frmEditTask input[name=tuoi2]").val(data.task.tuoi2);
            $("#frmEditTask input[name=job2]").val(data.task.job);
            $('#frmEditTask').find(':radio[name=job][value="1"]').prop('checked', true);
            $('#frmEditTask #student').css('display','block');
        }
        
        else if (data.task.type == '2') {
            $("#frmEditTask input[name=school]").val(data.task.truong);
        $("#frmEditTask input[name=email1]").val(data.task.email);
        $("#frmEditTask input[name=telephone1]").val(data.task.dienthoai);
             $('#frmEditTask').find(':radio[name=job][value="2"]').prop('checked', true);
             $(' #frmEditTask #alumnus').css('display','block');
        }
       else
       {
            
        $("#frmEditTask input[name=email2]").val(data.task.email);
        $("#frmEditTask input[name=telephone2]").val(data.task.dienthoai);
        $("#frmEditTask input[name=job3]").val(data.task.job);
         $('#frmEditTask').find(':radio[name=job][value="3"]').prop('checked', true);
         $('#frmEditTask #person').css('display','block');
       }
       

       
        $("#frmEditTask input[name=birthday]").val(data.task.ngaysinh);
        $("#frmEditTask input[name=tuoi]").val(data.task.tuoi);
        $("#frmEditTask input[name=andress]").val(data.task.diachi);
        
       
        $("#frmEditTask input[name=id]").val(data.task.id);
        $('#edit-hocvien-Modal').modal('show');
    },
    error: function(data) {
        console.log(data);
    }
});
}
$(function () {
     
        $('#btn-edit-hocvien').click(function (e) {
      e.preventDefault();
      let $this = $(this);
     let $domForm = $this.closest('#frmEditTask');
       
      $.ajax({
        url: 'http://localhost:8000/alibaba2/public/hoc-vien/sua-hocvien/' + $("#frmEditTask input[name=id]").val(),
         data: new FormData($("#edit-hocvien-Modal form")[0]),
                        contentType: false,
                        processData: false,
         method : "POST",
      }).done(function (data) {
        $("#edit-hocvien-Modal").modal('hide');
        $("#frmEditTask")[0].reset();
         $('tbody').html(data);
      }).fail(function (data) {
        var errors = data.responseJSON;
        $.each(errors.errors, function (i, val) {
          $domForm.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
        });
      });
    });
  })



    // xóa chi nhánh
  $(function () {
$('body').on("click",'.js-xoahocvien',function(event){
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

</script>
@endsection