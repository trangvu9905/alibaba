




<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <base href="{{asset('')}}" >
  <title>Anh Ngữ The Door</title>



  <!-- bootstrap core css -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"> -->
  <!-- progress barstle -->
  <link rel="stylesheet" href="cssdangki/css.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <link href="cssdangki/jquery-ui.min.css" rel="stylesheet">
  <!-- font wesome stylesheet -->
  
  <!-- Custom styles for this template -->
  
  <!-- responsive style -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="admin_aset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="admin_aset/bower_components/bootstrap/dist/css/icon.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="admin_aset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="admin_aset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- DataTables CSS -->
        <link href="admin_aset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="admin_aset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="admin_aset/dist/fontawesome/css/all.css">
        <link rel="stylesheet" href="admin_aset/dist/css/css.css">
        
        <link rel="stylesheet" href="admin_aset/dist/css/animate.css">
        <link rel="stylesheet" href="admin_aset/dist/css/boostrap.css">
        <link rel="stylesheet" href="admin_aset/dist/css/buttons.css">
        <link rel="stylesheet" href="admin_aset/dist/css/colorbox.css">
       <link rel="stylesheet" href="admin_aset/dist/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="admin_aset/dist/css/font.css">
        <link rel="stylesheet" href="admin_aset/dist/css/icon.css">
        <link rel="stylesheet" href="admin_aset/dist/css/lleader.css">
        <link rel="stylesheet" href="admin_aset/dist/css/Ncolorbax.css">
        <link rel="stylesheet" href="admin_aset/dist/css/orange.css">
        <link rel="stylesheet" href="admin_aset/dist/css/ori-core.css">
        <link rel="stylesheet" href="admin_aset/dist/css/responsive.css">
        <link rel="stylesheet" href="admin_aset/dist/css/style.css">
        <link rel="stylesheet" href="admin_aset/dist/css/style_table.css">
        <link rel="stylesheet" href="admin_aset/dist/css/ui-custom.css">
        <link rel="stylesheet" href="admin_aset/dist/css/jquery.alerts.css">
        <link rel="stylesheet" href="admin_aset/dist/css/vlt.css">
        <link rel="stylesheet" href="admin_aset/dist/css/daotao.css">
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
        <link rel="stylesheet" href="https://codeseven.github.io/toastr/build/toastr.min.css" type="text/css">
</head>

<body>
  <!--header start here-->
  <div class="container" > 

   <div class="row" style="padding-top: 10%"> 
    <div class="col-xs-12 col-sm-12 col-md-6 well well-sm col-md-offset-3"> 
     <legend><a ><i class="glyphicon glyphicon-globe"></i></a> Đăng ký học viên!
     </legend> 
     @if(count($errors) >0)
        <div class="alert alert-danger">
          @foreach($errors->all() as $err)
            {{$err}}<br>
            
          @endforeach
        </div>
      @endif
     <form action="dangky" method="post" class="form" role="form"> 
     
      @csrf
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
            <label class="radio-inline"><input name="sex" id="inlineCheckbox1" value="1" type="radio" checked>Nam </label> 
            <label class="radio-inline"><input name="sex" id="inlineCheckbox2" value="2" type="radio">Nữ </label> 
          </div>
        </div> 

        <!-- ngày sinh -->
        <div class="col-md-12 col-xs-12">
         <div class="col-xs-6 col-md-6"> 
          <span>Ngày sinh</span>
          <input class="form-control" name="birthday" id="ngaysinh"   type="text"  onchange="myFunction()">
          

        </div>
        <!-- ảnh -->
        <div class="col-xs-6 col-md-6"> 
        <span>Tuổi</span>
          <input class="form-control" name="tuoi" id="tuoi" readonly> 
          
        </div>
      </div>
       <!-- ảnh -->
       <div class="col-xs-12 col-md-12"> 
        <div class="col-xs-6 col-md-6"> 
          <span>Ảnh</span>
          <input type="file" class="form-control" name="img" placeholder="anh" type="text"> 
        </div>
        <div class="col-xs-6 col-md-6"> 
         
       
          <label class="control-label"><b>Chọn ca học</b></label>
                         <select name="cahoc" class="form-control" >
                            @foreach($cahoc as $ct)
                           <option value="{{$ct->id}}">{{$ct->name}}</option>
                          
                           @endforeach
                         </select>
        
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
      <div class="col-xs-4 col-md-10 col-lg-8 col-sm-3">
        <p>Nghề nghiệp</p>
        <label class="radio-inline"><input name="job" id="hocsinh" value="1" type="radio">Học sinh</label> 
        <label class="radio-inline" style="margin-left: 0px;"><input name="job" id="sinhvien" value="2" type="radio">Sinh viên</label> 
        <label class="radio-inline" style="margin-left: 0px;"><input name="job" id="dilam" value="3" type="radio">Người đi làm</label> 
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
    <div class="col-md-12 col-xs-12" style="padding-top: 4%">
      <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button> 
      
    </div>
  </form> 
</div> 
</div>
</div>

<!--footer end here-->
<script src="admin_aset/bower_components/metisMenu/dist/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="admin_aset/dist/js/sb-admin-2.js"></script>
        <!-- DataTables JavaScript -->
        <script src="admin_aset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
        <script src="admin_aset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
       <script language="javascript" type="text/javascript"> </script>
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->




         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      
     <script src="js/jquery-ui-11.js"></script>
      <script src="js/jquery.ui.trong.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/tasks.js')}}"></script>
   <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
   <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<script src="js/toastr.min.js"></script>
<script src="js/jquery.printPage.js"></script> 


  <script>
   $(document).ready(
                    function () {
                        $("#ngaysinh").datepicker({
                            dateFormat: 'dd-mm-yy',
                            changeMonth: true, //Tùy chọn này cho phép người dùng chọn tháng
                            changeYear: true //Tùy chọn này cho phép người dùng lựa chọn từ phạm vi năm
                        });
                      
                    }
            );
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

</body>

</html>