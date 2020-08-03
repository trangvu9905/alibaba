<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail đăng ký khóa học</title>
    <link rel="stylesheet" href="admin_aset/dist/css/boostrap.css">
    <link href="admin_aset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    table, th, td {
        border: 1px solid black;
       border-collapse: collapse;
    }
    td {
     text-align: center;
    }
    </style>
</head>
<body>
    <h1>XIN CHÀO : {{$name}}</h1>
    <p><h2>Bạn đã đăng ký thành công khóa học : <b>{{$khoahoc}}</b> </h2></p>
    <p><h2> chi nhánh :{{$chinhanh}}  </h2></p>
    <p><h2>Thông tin lớp học :</h2></p>
    <table style="width:100%"> 
    <tr>
           <th class="text-center">Mã lớp</th>
           <th class="text-center">Tên lớp</th>
           <th class="text-center">Thời gian bắt đầu</th>
           <th class="text-center">Thời gian kết thúc</th>
    </tr>
    <tr>
          <td class="text-center">{{$malop}}</td>
          <td class="text-center">{{$lop}}</td>
          <td class="text-center">{{$batdau}}</td>
          <td class="text-center">{{$ketthuc}}</td>
    </tr>
    </table>
</body>
</html>