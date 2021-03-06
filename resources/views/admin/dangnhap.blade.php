

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="app">

<!-- Mirrored from admin.alibabaschool.vn/login.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Feb 2020 07:03:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <base href="{{asset('')}}">
    <title>Trường Anh Ngữ Quốc Tế Alibaba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/icon.css" type="text/css" />
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/ori-core.css" type="text/css" />
    <link rel="stylesheet" href="css/Ileader.css" type="text/css">
 <link rel="icon" href="images/Aliweb.html" type="image/gif" sizes="16x16"> 
    <!--[if lt IE 9]>
        <script src="/js/ie/html5shiv.js"></script>
        <script src="/js/ie/respond.min.js"></script>
        <script src="/js/ie/excanvas.js"></script>
        <![endif]-->
    <script src="js/md5.js"></script>
   
</head>
<body class="signin">
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
      <div class="container aside-xl">
        <a class="block text-center" href="#"><img src="images/logo.png"></a>
        <section class="m-b-lg formlg">
          <header class="wrapper text-center">
            <strong>Welcome to <span style="font-family: tahoma;">Alibaba School</span> </strong>
          </header>
           <div class="text-center">
                @if(count($errors) >0)
                          <div class="alert alert-danger">
                              @foreach($errors->all() as $err)
                                {{$err}}<br>
                                
                              @endforeach
                              </div>
                        @endif
                        @if(session('thongbao'))
                         <div class="alert alert-success">{{session('thongbao')}}</div>
                        @endif
                        </div>
          <form id="login" action="postdangnhap" method="POST">
            <div class="list-group">
              <div class="list-group-item">
                <input required id="user" name="name" type="text" placeholder="Tên đăng nhập" class="form-control no-border">
              </div>
              <div class="list-group-item">
                <input required id="pass" name="password" type="password" placeholder="Mật khẩu" class="form-control no-border">
              </div>
              <div class="text-center m-t m-b">
                  <div class="label label-warning" id="checkit"></div>
              </div>  
            </div>
            <button type="submit" class="btn btn-lg btn-primary btn-block">Đăng Nhập</button>
            <div class="text-center m-t m-b"><a href="#">
            
            </a></div>
          </form>
        </section>
      </div>
    </section>
    <!-- footer -->
    <footer id="footer">
      <div class="text-center padder">
        
      </div>
    </footer>
    <!-- / footer -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.js"></script>
    <!-- App -->
    <script src="js/app.js"></script>
    <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/app.plugin.js"></script>
    <!--loginbox-->
    <script src="js/login.js"></script>
    
</body>


</html>
