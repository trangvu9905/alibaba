<!DOCTYPE html>
   <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- <meta http-equiv="refresh" content="30"> -->
        <base href="{{asset('')}}">
        <title>Trang quản trị</title>

        <!-- Bootstrap Core CSS -->
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
        <!-- js -->
        <!-- <script src="admin_aset/dist/Js/jquery.min.js"></script> 
        <script src="admin_aset/dist/Js/jquery.alerts.js"></script> 
        <script src="admin_aset/dist/Js/jquery-1.10.2.js"></script>
        <script src="admin_aset/dist/Js/jquery-ui-11.js"></script>
        <script src="admin_aset/dist/Js/jquery.ui.trong.js"></script>
        <script src="admin_aset/dist/Js/Slk.js"></script>   
        <script src="admin_aset/dist/Js/colorbox.js"></script> 
        <script src="admin_aset/dist/js/Ncolorbox.js"></script> 
        <script src="admin_aset/dist/js/jquery.dataTables.min.js"></script> -->
<style>
.error-form{
    color:red;
}
</style>
    </head>
       
    <body>
        
        @include('admin.layout.header') 
          @include('admin.layout.banner') 
   
         @include('admin.layout.menu') 
    <!-- check -->
    
    <!-- check -->
            <div class="col-md-offset-1 vlt-than">
                
<section class="section-layout-1">
  <section class="hbox stretch">
    
    @yield('content')
    
</section>
</section>
        </div>
        <div id="chatbox1_script_fullajax">
     <!-- Facebook Pixel Code -->

 <link rel="stylesheet" href="admin_aset/dist/css/chatbox.css">
<script src="admin_aset/dist/Js/chatbox.js"></script> 
<div id="fullloading" style="position:fixed;text-align:center;top:20px;left:45%;z-index:90000;display:none"><img src="/images/loader_green.gif"></div>
<div class="chatbox" id="chatboxform">
    <div class="taskbar" id="taskbarbox">
        <div class="taskbar" id="taskbarbox"> 
            @foreach($nhansu as $nsu)
           <div class="box" id="ibox_containt{{$nsu->id}}" style="display: none;">
            <input type="hidden" id="ibox_visible{{$nsu->id}}" value="0">
             <div class="title"><div class="text"><i class="glyphicon glyphicon-conversation">
              </i> {{$nsu->hoten}}
          </div>
           <span class="bt"> 
            <a href="javascript:cb_addtogroup('{{$nsu->id}}')">+ Thêm người</a>
            <button id="Button1" class=" btn btn-default btn-xs pull-right  " title="Thu nhỏ" onclick="hidebox('{{$nsu->id}}')"> 
                <i class="glyphicon glyphicon-remove"></i> 
            </button>
        </span>
    </div>
    <div class="containtbox" id="ibox_text{{$nsu->id}}">
    <div class="itemsys"> 
     <span class="textsys"> test mời {{$nsu->hoten}} trò chuyện </span>
 </div> 
 <div class="itemsys"> 
  <span class="textsys"> 
  17 ngày</span>
</div> 
</div> 
<div class="inputpost">
    <textarea autofocus="autofocus" id="ibox_txtpost{{$nsu->id}}" onkeypress="return enterup_chatbox(event,this)" data-id="{{$nsu->id}}" placeholder="Nhấn enter để gửi">
    </textarea>
    <div class="btonsend" onclick="ibox_post('{{$nsu->id}}')" title="Gửi" id="btchatS_{{$nsu->id}}">
    </div>
</div>
</div>
@endforeach

        
    <div class="formmain">
                  <div class="title" onclick="Toogle_chatbox()"><i class="fa fa-comment fa-2x icon-muted" style="font-size:14pt"></i> Chat Nhóm
                     <button id="btn_project" class="joyride-next-tip btn btn-default btn-xs pull-right  " title="Thu nhỏ">
                      <i class="glyphicon glyphicon-expand"></i>  </button>
                  </div>
           <div id="idcontaint_chatbox" class="containt" style="display: none;">
                 <div id="item_group"></div>
                 <div id="item_containt">Bạn bè:
                    @foreach($nhansu as $ns)
                    <div class="users items clear" onclick="Create_box('{{$ns->id}}')">
                    <img src="/module/chat/IMG_AVA.aspx?case=A" class="infoTip cir_avatar_create">{{ $ns->hoten }}</div>
                    @endforeach
                </div>
           </div>
    </div>  
 </div>
     <script>
        function Toogle_chatbox()
        {
            if ($("#idcontaint_chatbox").is(":hidden"))
            {
                Status_formmain("1")
            } else {
                Status_formmain("0");
            }
            $("#idcontaint_chatbox").toggle("slow"); 
        } 
</script> 
  <script type="text/javascript">

      var url = 'ws://admin.alibabaschool.vn/module/chat/AHX.ashx?ID=';
      //  alert('Connecting to: ' + url); 
      var ws = new WebSocket(url);
      ws.onopen = function () { 
      };
      ws.onmessage = function (e) {
          // {function: ,lastid: }
          //   alert(e.data);
          Excute_ws(e.data.replace("{", "").replace("}", ""))
      };
      $('#cmdLeave').click(function () {
          ws.close();
      });
      ws.onclose = function () {
          setTimeout(function () { ws = new WebSocket(url); }, 4000);
          console.log("reconenct ws");
          //   $('#chatMessages').prepend('Closed <br/>');
      };
      ws.onerror = function (e) {
          setTimeout(function () { ws = new WebSocket(url); }, 4000);
          // $('#chatMessages').prepend('Oops something went wront <br/>');
      };

      function Excute_ws(message) {
          //  alert(message)
          var res = message.split(",");
          var fc = res[0].split(":");
          //  alert(fc[1].replace("\"", "").replace("\"", ""));
          var fc_js = fc[1].replace("\"", "").replace("\"", "")
          var vl = res[1].split(":");
          var vl_js = vl[1].replace("\"", "").replace("\"", "")

          var idgr = res[2].split(":");
          var gr_js = idgr[1].replace("\"", "").replace("\"", "")
          if (fc_js == "Chatloadgaint") {
              CB_Ajaxload_agant(gr_js, get_lastedid(gr_js));
          } 
      } 
      function Post_ws_chat(idgroup) {

          //  ws.onopen = function () {
          //  alert("SNED")
          var Para_post = "{\"module\":\"chat\",\"type\":\"loadagain\",\"value\":\"" + idgroup + "\"}";
          ws.send(Para_post);

          //  }
      }
    </script>
  </div>
           
      <script>
                // Lấy đối tượng Canvas
                var canvas = document.getElementById('myCanvas');

                // Chọn đối tượng vẽ 2D
                var context = canvas.getContext('2d');

                // Tiến hành vẽ
                context.beginPath();        // Khai báo vẽ đường thẳng mới
                context.moveTo(0, 10);     // Điểm bắt đầu
                context.lineTo(1000, 10);   // Điểm kết thúc
                context.lineWidth = 1;     // rộng 15px
                context.strokeStyle = 'blue';// Màu xanh
                context.stroke();           // Tiến hành vẽ
            </script>
      
      <script>
          var m = document.querySelector("main"),
        h = document.querySelector("#header"),
        hHeight;
     
    function setTopPadding() {
      hHeight = h.offsetHeight;
      m.style.paddingTop = hHeight + "px";
    }
    window.onresize = function() {
      setTopPadding();
    };
      </script>
        
        <!-- /#wrapper -->

        <!-- jQuery -->
      
        <!-- Bootstrap Core JavaScript -->
        
        <!-- Metis Menu Plugin JavaScript -->
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
   
      @yield('script')
    </body>

    </html>
