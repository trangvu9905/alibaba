
@extends('admin.index')
@section('content')
<section id="content">
                    <section class="hbox stretch">

                        <section class="section-layout-2">
                            

<script src="/module/lophoc/js/jslophoc.js"></script> 
<link href="/module/lophoc/js/lophoc.css" rel="stylesheet">
    <section class="vbox">
        

     @include('admin.lophoc.menulophoc')


<span id="ctl10_menutop_script_menutop"> <script>document.getElementById("menutop_lophoc").classList.add('item-active');</script></span>
        <section class="scrollable wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <section class="panel panel-default">
                        <div class="panel-heading">
                            <p class="inline m-b-xs m-t-xs font-bold">
                                
                                DANH SÁCH LỚP HỌC ĐANG HỌC
                            </p>
                           
                                 &nbsp;
                                <form  method="post" id="form-timlophoc">
                              @csrf
                                <select name="timlophoc" id="timlophoc"  class="form-control pull-right" style="width:150px">
                                    <option value="0">Tất cả</option>
                                    @foreach($chinhanh as $cn)
                                    <option value="{{$cn->id}}">{{$cn->ten}}</option>
                                    @endforeach
                                </select>
                                    </form>

                                
                            
                            <div class="clearfix"></div>
                        </div>
                   

                        <div class="table-responsive">

                        
                        <table class="table table-bordered" id="dyntable">
                            <thead>
                                <tr class="bg-info-ltest">
                                   
                                    <th style="width: 50px">STT
                                    </th>
                                    <th>Tên Lớp
                                    </th> 
                                    <th>Diễn Giải</th>
                                    <th class="head1" style="width: 150px">Đã học(buổi)</th>
                                     <th> Sĩ số </th>
                                    <th class="text-center">Thời khóa biểu</th>
                                    <th class="text-center" style="width: 220px">Chức năng</th> 
                                </tr>
                            </thead>
                            <tbody id="showlist"> 
                             @foreach($lophoc as $lh)
                                <?php 
                                                $in=$lh->ngaybatdau;
                                                
                                               $datein= date_create("$in");
                                               $tg1 = date_format($datein,"d/m/Y") ;
                                               $date=date("d/m/Y");
                                               // echo $date;
                                               // die();
                                                
                                                 $out=$lh->ngayketthuc;
                                                 $dateout= date_create("$out");
                                                  $tg2= date_format($dateout,"d/m/Y") ;
                                                
                                                 
                                                

                                    ?>
                                    @if($tg1 <= $date && $date <= $tg2)
                                <tr>
                                <td class="text-center">{{$loop->index+1}}</td>
                                <td>
                                 <b><a href="javascript:Edit_lophoc('215')">{{$lh->ten}}<i class="btedit fa fa-pencil"></i></a></b><br>
                             </td>
                             
                                 <td>
                                    <br>

                          </td>
                                 <td>
                                    <span class="badge bg-success">{{$lh->buoihoc}}</span>
                                </td>
                                <td> 
                                    <a href="javascript:hocvien_inLop('215')" class="badge bg-success" title="Xem danh sách lớp học">{{$lh->siso}}</a> 
                                    <a href="javascript:Joint_lopEdit('215')" class="badge bg-success" title="Thêm học viên vào lớp"><i class="i i-plus2"></i></a>
                                </td>
                                <td class="text-center">{{$lh->buoihoc}}</td>
                                <td>
                                    <a href="javascript:Lophoc_TKB('215')" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Thời Khóa Biểu</a>
                                    <a href="{{ route('ajax_xoalophoc',$lh->id) }}" class="btn btn-default btn-sm js-xoalophoc"><i class="fa fa-times"></i> Xóa</a></td>
                                </tr>
                                      @endif
                                      
                                @endforeach

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

  

                
                 @endsection
    @section('script')
                  </section>
    <script>
        // xoa lop hoc
          $(function () {
$('body').on("click",'.js-xoalophoc',function(event){
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
            // tìm phong theo chi nhánh
           $(function(){
     let URL = '{{ route('ajax_post.timlophoc') }}'
     $('#timlophoc').change(function (e) {

            e.preventDefault();
          
            let $this = $(this);

     let $domForm = $this.closest('#form-timlophoc');
             
            
            $.ajax({
                url: URL,
                 data: new FormData($("form")[0]),
                        contentType: false,
                        processData: false,
         method : "POST",
            }).done(function (data) {
               
                
                 $('#showlist').html(data);
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