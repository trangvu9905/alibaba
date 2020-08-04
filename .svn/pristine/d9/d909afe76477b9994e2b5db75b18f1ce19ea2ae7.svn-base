<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>


                <!-- /.aside -->
                <section id="content">
                    <section class="hbox stretch">

                        <section class="section-layout-2">
                            


<section class="vbox">
    <section class="scrollable wrapper w-f">
        <div class="row">
            <div class="col-lg-9 col-md-8">

                <div class="statistic">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="block padder-v hover">
                                <span class="i-s i-s-2x pull-left m-r-sm">
                                    <i class="i i-hexagon2 i-s-base text-warning hover-rotate"></i>
                                    <i class="i i-study icon text-white"></i>
                                </span>
                                <span class="clear">
                                    <span id="ctl21_counthv" class="h3 block m-t-xs text-warning">0</span>
                                    <small class="text-muted text-u-c">Học viên</small>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="block padder-v hover">
                                <span class="i-s i-s-2x pull-left m-r-sm">
                                    <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                    <i class="i i-users2 i-sm text-white"></i>
                                </span>
                                <span class="clear">
                                    <span id="ctl21_count_pdk" class="h3 block m-t-xs text-success">0</span>
                                    <small class="text-muted text-u-c">Phiếu Đăng Ký</small>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="block padder-v hover">
                                <span class="i-s i-s-2x pull-left m-r-sm">
                                    <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                    <i class="i i-chart i-sm text-white"></i>
                                </span>
                                <span class="clear">
                                    <span id="ctl21_count_waitingclass" class="h3 block m-t-xs text-info">0</span>
                                    <small class="text-muted text-u-c">Chờ xét lớp</small>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="block padder-v hover">
                                <span class="i-s i-s-2x pull-left m-r-sm">
                                    <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                    <i class="i i-book i-sm text-white"></i>
                                </span>
                                <span class="clear">
                                    <span id="ctl21_hv_inclass" class="h3 block m-t-xs text-primary">0</span>
                                    <small class="text-muted text-u-c">Đang học</small>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.statistic -->

      



                <section class="panel panel-primary">
                    <header class="panel-heading">
                        <strong>Thông báo - sự kiện</strong>
                    </header>
                    <!-- /.panel-heading -->

                    <div class="panel-body panel-body-full panel-body-relative">
                        
 <!-- <link href="/module/feed/css/Daotao.css" rel="stylesheet"> 
<script src="/module/feed/JS/feed.js"></script> -->
<div id="alertMessage" class="error"></div>
 

        <div class="panel-body panel-body-full panel-body-relative">
            <ul class="list-group slim-scroll" id="showlist_feed"></ul>


        </div>
           
 

                      
                    </div>
                    <!-- /.panel-body -->
                </section>
                <!-- /.panel -->

                <div class="row">
                    <div class="col-lg-6">
                        <section class="panel panel-primary">
                            <header class="panel-heading">
                                <strong>Công việc trong tuần</strong>
                            </header>

                       
                                <ul id="ctl21_cvtrongtuan" class="list-group"> <li class="list-group-item"> <a href="javascript:View_Detail_home('2664')"><label><b>Học sinh 1</b></label> ÁDASDASD<small class="block block-buttom-right text-muted">  <i class="fa fa-clock-o"></i>14/02/2020</small></a> </li></ul>
                        </section>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-lg-6">
                        <section class="panel panel-primary">
                            <header class="panel-heading">
                                <strong>Công việc hôm nay</strong>
                                <ul class="nav nav-pills pull-right">
                                </ul>
                            </header>
                            <ul id="ctl21_cvhomnay" class="list-group"><li class="list-group-item">Hôm nay không có lịch hẹn</li></ul>
                        </section>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->


            </div>
            <!-- /.col-sm-9 -->

            <div class="col-lg-3 col-md-4">
                <section class="panel panel-primary">
                    <header class="panel-heading">
                        <strong>THÔNG TIN CHƯƠNG TRÌNH</strong>

                       
                    </header>

                    <div class="panel-body panel-body-full">
                        <div id="ctl21_list_chuongtrinh" class="list-group no-radius">    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse"> Ali Kids 1 (10 - 14 tuổi) </a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse"> Ali Teen 1 (12-18tuổi)</a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse">Ali Adult 3 ( Ca6: 2,4,6)</a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse">Ali Kids lớn 1(10-14 tuổi) </a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse">Ali Kindy 1</a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse">Ali Kindy 2 </a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse">Ali Teens Tân Dân </a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse">Chương trình 50% GVNN  </a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse">Học Sinh Giỏi Tiếng Anh cấp 2 </a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse">Học Tiếng Anh: 100% GVNN </a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse">Khóa 1 Tiếng Anh Người Lớn</a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse">Tiếng Anh cấp 2 nhóm cô Minh</a>    <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalCourse">Tiếng Anh Mầm Non</a></div>
                    </div>
                </section>
                <!-- /.panel -->

                <section class="panel panel-primary">
                    <header class="panel-heading">
                        <strong>Thống kê cá nhân</strong>
                        
                    </header>

                    <div class="panel-body panel-body-full">
                        <div class="list-group no-radius alt">
                   

                            <a class="list-group-item no-b-t" href="#" data-toggle="modal" data-target="#modalAnalyticSmall">
                                <strong id="ctl21_doanhthuhocphi" class="badge">0</strong>
                                <i class="fa fa-money icon-muted"></i>
                                Doanh thu học phí
                            </a>
                            <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalAnalyticSmall">
                                <strong id="ctl21_uudai" class="badge">0</strong>
                                <i class="fa fa-credit-card icon-muted"></i>
                                Ưu Đãi
                            </a>
                            <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalAnalyticSmall">
                                <strong id="ctl21_thucthu" class="badge">0</strong>
                                <i class="fa fa-credit-card icon-muted"></i>
                                Thật thu
                            </a>
                            <a class="list-group-item" href="#" data-toggle="modal" data-target="#modalAnalyticSmall">
                                <strong id="ctl21_thuchi" class="badge">0</strong>
                                <i class="fa fa-money icon-muted"></i>
                                Thu khác
                            </a>
                        </div>

                    </div>
                </section>
                <!-- /.panel -->
            </div>
            <!-- /.col-sm-3 -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.scrollable .wrapper -->

    <footer class="footer bg-white b-t b-light">
        <p>
            Phần mềm quản lý trung tâm anh ngữ Ileader.
        </p>
    </footer>

    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
</section>

                            <!-- /.vbox -->
                        </section>
                        <!-- /.section-layout-2 -->

                    </section>
                    <!-- /.hbox.stretch -->

