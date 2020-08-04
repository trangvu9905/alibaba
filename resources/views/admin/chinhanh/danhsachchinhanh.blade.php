@extends('admin/index')
@section('content')
  <section id="content">
                    <section class="hbox stretch">

                        <section class="section-layout-2">                            

        <div class="row">
            <div class="col-sm-12">
                <div class="menu-option-top1 panel b-a m-b-sm">
                    <div class="row m-n">
                        <div class="item-menu col-md-2 b-r m-t-xs m-b-xs">
                            <a href="#" class="themchinhanh">
                                <span class="i-s i-s-1-5x pull-left m-r-xs">
                                    <i class="i i-hexagon2 i-s-base text-warning hover-rotate"></i>
                                    <i class="i i-plus2 text-white i-sm"></i>
                                </span>
                                <span class="clear">
                                    <span class="h5 block m-t-xs text-danger">Thêm mới</span>
                                    <small class="text-muted">Chi nhánh</small>
                                </span>
                            </a>
                        </div>
 
                        
                    </div>
                </div>
            </div>
        </div>
    
    <section class="scrollable wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <section class="panel panel-default">
                <div class="panel-heading">
                        <p class="inline m-b-xs m-t-xs font-bold">
                            
                            CHI NHÁNH
                        </p>
                      </div>  
 
                        <div class="clearfix"></div>
                   

                    <div class="table-responsive listing">

                        
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                   <th class="th-sortable" data-toggle="class">Logo
                                    </th>
                                    
                                    <th class="th-sortable" data-toggle="class">Tên chi nhánh
                                    </th>
                                    <th class="th-sortable hidden-md hidden-sm hidden-xs" data-toggle="class">Mã chi nhánh
                                    </th>

                                    <th class="th-sortable hidden-md hidden-sm hidden-xs" data-toggle="class">Thời gian tạo
                                    </th>
                                    
                                    <th class="text-center">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                            	 @if($chinhanh)
                            	@foreach($chinhanh as $cn)
                            	<tr>
                                      <td class="text-center"><img src="{{url('')}}/upload/{{$cn->logo}}" alt="" width="120px"></td>
                                      <td>{{$cn->ten}}</td>
                                      <td>{{$cn->machinhanh}}</td>
                                      <td>{{$cn->created_at}}</td>
                                      <td class="text-center">
                                        <a onclick="event.preventDefault();editchinhanh({{$cn->id}})" title="Chỉnh sửa" href="#" class="edit open-modal btn btn-info" data-toggle="modal" value="{{$cn->id}}"><i class="fa fa-pencil"></i></a>
                                       <a  href="{{ route('ajax_xoachinhanh',$cn->id) }}" class="btn btn-info js-xoachinhanh" ><i class="fa fa-trash-o"></i></a>
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

 <!-- modal thêm chi nhanh -->

       <div class="modal fade" id="modal-themchinhanh">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Thêm mới chi nhánh</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="POST" id="form-themchinhanh" enctype="multipart/form-data">
                        @csrf
                       
                
                  <div class="col-sm-6"> 
                  	<div class="form-group">
                  		<label class="control-label">Ảnh đại diện </label>
                  		<input type="file" name="img"  class="form-control">
                  		<span class="error-form"></span>
                  	</div> 
                  </div>
                    <div class="col-sm-6"> 
                  	<div class="form-group">
                  		<label class="control-label">Mã chi nhánh</label>
                  		<input type="text" name="machinhanh" id="" class="form-control">
                  		<span class="error-form"></span>
                  	</div> 
                  </div>
                  <div class="col-sm-12"> 
                  	<div class="form-group">
                  		<label class="control-label">Tên chi nhánh</label>
                  		<input type="text" name="name"  class="form-control">
                  		<span class="error-form"></span>
                  	</div> 
                  </div>
                  <div class="col-sm-12"> 
                  	<div class="form-group">
                  		<label class="control-label">Thông tin chi nhánh</label>

                      <textarea  name="diengiai" id="editor1"></textarea>
                   
                  
                  	<span class="error-form"></span>
                    <input type="hidden" name="test" id="test">
                  	</div> 
                  </div>
                 
      
            <div class="clearfix" style="clear:both;height:30px;text-align:center"> 
           </div>
               
                        <button type="submit" class="btn btn-primary js-btn-themchinhanh">thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   <!-- modal sửa chi nhánh -->
    <div class="modal fade" id="modal-suachinhanh">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Sửa chi nhánh</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="POST" id="form-suachinhanh" enctype="multipart/form-data">
                        @csrf
                       
                
                  <div class="col-sm-6"> 
                    <div class="form-group">
                      <label class="control-label">Ảnh đại diện </label>
                      <input type="file" name="img"  class="form-control">
                      <span class="error-form"></span>
                    </div> 
                    <img src="" alt="" id="img_cu" width="100px"> 
                  </div>
                  <input type="hidden" name="img_hi"  class="form-control">

                    <div class="col-sm-6"> 
                    <div class="form-group">
                      <label class="control-label">Mã chi nhánh</label>
                      <input type="text" name="machinhanh"  class="form-control">
                      <span class="error-form"></span>
                    </div> 
                  </div>
                    <br>
                  <br>
                  <div class="col-sm-12"> 
                    <div class="form-group">
                      <label class="control-label">Tên chi nhánh</label>
                      <input type="text" name="name"  class="form-control">
                      <span class="error-form"></span>
                    </div> 
                  </div>
                  <div class="col-sm-12"> 
                    <div class="form-group">
                      <label class="control-label">Thông tin chi nhánh</label>

                    <textarea name="diengiai" id="editor2" ></textarea>
                   
                    <span class="error-form"></span>
                    </div> 
                  </div>
                  <input type="hidden" name="test1" id="test1">
                  <input type="hidden" name="id" id="id">
                 
      
            <div class="clearfix" style="clear:both;height:30px;text-align:center"> 
           </div>
               
                        <button type="submit" class="btn btn-primary js-btn-suachinhanh">Sửa chi nhánh</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
@section('script')
<script> CKEDITOR.replace('editor1'); </script>
   <script> CKEDITOR.replace('editor2'); </script>
<script type="text/javascript">

  // thêm chi nhánh
	$(function () {

    	$(".themchinhanh").click(function (event) {
			event.preventDefault();
			$("#modal-themchinhanh").modal('show');
		})
    	let URL = '{{ route('ajax_post.themchinhanh') }}'
        $('.js-btn-themchinhanh').click(function (e) {

			e.preventDefault();
     let a=CKEDITOR.instances.editor1.getData();
     $("#test").attr('value',a);
			let $this = $(this);

     let $domForm = $this.closest('#form-themchinhanh');
			 
            
			$.ajax({
				url: URL,
				 data: new FormData($("#modal-themchinhanh form")[0]),
                        contentType: false,
                        processData: false,
         method : "POST",
			}).done(function (data) {
				$("#modal-themchinhanh").modal('hide');
				$("#form-themchinhanh")[0].reset();
				 $('tbody').html(data);
			}).fail(function (data) {
				var errors = data.responseJSON;
				$.each(errors.errors, function (i, val) {
					$domForm.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
				});
			});
		});
	})

  // sửa chi nhánh
  function editchinhanh(cn) {
   
    $.ajax({

        type: 'GET',
        url: 'http://localhost:8000/alibaba2/public/suachinhanh/'+cn,
        success: function(data) { 
            $("#form-suachinhanh input[name=name]").val(data.cn.ten);
            $("#form-suachinhanh input[name=machinhanh]").val(data.cn.machinhanh);
            $("#form-suachinhanh input[name=image]").val(data.cn.logo);
             $("#form-suachinhanh input[name=id]").val(data.cn.id);
             $("#form-suachinhanh input[name=img_hi]").val(data.cn.logo);
             $("#form-suachinhanh input[name=test1]").val(data.cn.diengiai);
             CKEDITOR.instances.editor2.setData(data.cn.diengiai);

        $("#form-suachinhanh #img_cu").attr('src','{{url("")}}/upload/'+data.cn.logo);
            $('#modal-suachinhanh').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

$(function () {
     
        $('.js-btn-suachinhanh').click(function (e) {
      e.preventDefault();
       let a=CKEDITOR.instances.editor2.getData();
     $("#test1").attr('value',a);
      let $this = $(this);
     let $domForm = $this.closest('#form-suachinhanh');
    
            
      $.ajax({
        url: 'http://localhost:8000/alibaba2/public/sua-chi-nhanh/'+$("#form-suachinhanh input[name=id]").val(),
         data: new FormData($("#modal-suachinhanh form")[0]),
                        contentType: false,
                        processData: false,
         method : "POST",
      }).done(function (data) {
        $("#modal-suachinhanh").modal('hide');
        $("#form-suachinhanh")[0].reset();
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
<script type="text/javascript">
	
// xóa chi nhánh
  $(function () {
$('body').on("click",'.js-xoachinhanh',function(event){
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