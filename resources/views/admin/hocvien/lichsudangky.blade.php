
@extends('admin.index')
@section('content')
<section class="hbox stretch">

<section class="section-layout-2">
      
<section class="vbox">
    

    @include('admin.hocvien.menuhocvien')


<span id="ctl10_menutop_script_menutop"> <script>document.getElementById("menutop_History-registry").classList.add('item-active');</script></span>
    <section class="scrollable wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <section class="panel panel-default">
                    <div class="panel-heading">
                        <p class="inline m-b-xs m-t-xs font-bold">
                            LỊCH SỬ ĐĂNG KÝ
                        </p>
                        <div id="toolbar" class="pull-right">
                            <a href="javascript:tableToExcel()" title="Xuất file excel" class="btn btn-default btn-sm">
                                <div class="iconBox color" original-title="Xuất Excel" id="Div1">
                                    <img alt="document" src="/images/icon/excel-icon.gif">
                                </div>
                            </a>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="row wrapper">
                        <div class="col-sm-12">
                       
                                <form id="form-lichsudangky" method="post"  class="form-inline" role="form" >
                                 @csrf
                                    <div class="form-group">
                                        <label class="control-label">Mã HV hoặc Tên</label>
                                         <input name="name" type="text" id="ctl10_txtsearch" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Đăng ký từ Ngày</label>
                                        <input type="text"  name="fromdate" class="form-control Datepicker">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Đến Ngày</label>
                                        <input type="text"  name="todate" class="form-control Datepicker">
                                    </div>
                                    
                            <button type="submit" class="btn btn-primary js-btn-lichsudangky"><i class="fa fa-search"></i> Tìm</button>
                     

                                </form>
                          
                        </div>
                    </div>
                    <div class="table-responsive listing">

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped b-t b-light" id="lsdangki">
                            
                            <thead>
                                <tr>
                                    <th class="head0">MÃ ĐK</th>
                                    <th class="head1">Mã Học Viên</th>
                                    <th class="head1">Họ Tên</th>
                                    <th class="head0">Ngày đăng ký</th>
                                    <th class="head1">Quản lý</th>
                                    <th class="head0">Số tiền</th>
                                  
                                    <th class="head1">Hành động</th>
                                </tr>
                            </thead>
                            <tbody id="showlist"> 
                             @if($dangky)
                             @foreach($dangky as $dk)
                             <tr>
                                 <td>{{$dk->MADK}}</td>
                                 <td>{{$dk->Hocsinh->MAHS}}</td>
                                 <td>{{$dk->Hocsinh->ten}}</td>
                                 <td>{{$dk->created_at}}</td>
                                 <td></td>
                                 <td><?php echo number_format($dk->Tonghocphi); ?> đ</td>
                                 <td class="text-center"> <span class="input-group-btn">
                                    <button data-toggle="dropdown" class="dropdown-toggle btn btn-xs btn-default" type="button"> 
                                    <i class="i i-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                    <li> 
                                    <a href="/module/hocvien/print/print_select.aspx?idlenh=2219" target="_blank">
                                    <i class="fa fa-print"></i> In phiếu  </a>
                                    </li>                
                                    <li> 
                                    <a href="/Default.aspx?mod=hocvien!dangky_group&amp;idhocvien=3831&amp;idedit=2219" title="Sửa">
                                    <i class="fa fa-edit"></i> Sửa phiếu  </a>
                                    </li>                
                                    <li> 
                                    <a href="javascript:Thu_hocphi('2219')" title="thu hoc phi">
                                    <i class="fa fa-money"></i> Thu học phí </a></li>               
                                     <li> <a href="javascript:Del_phieudangky('2219')" title="Sửa">
                                     <i class="fa fa-times"></i> Hủy phiếu đăng ký  </a>
                                     </li>           
                                      </ul>        
                                      </span></td>
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

<div class="tooltip_pj" id="tooltipbox" style="display: none;"></div>


                            <!-- /.vbox -->
                        </section>
                        <!-- /.section-layout-2 -->

                    </section>
@endsection
@section('script')

 
<script>

          $(document).ready(
          function () {
             $(".Datepicker").datepicker({
              dateFormat: 'dd-mm-yy',
              changeMonth: true, //Tùy chọn này cho phép người dùng chọn tháng
              changeYear: true, //Tùy chọn này cho phép người dùng lựa chọn từ phạm vi năm
                                        
          });
         }
                                    
        );

        // thống kê đăng ký theo ngày, tháng ,tên hoc viên,mã học viên
 $(function () {

    let URL = '{{ route('ajax_post.lichsudangky') }}';

$('.js-btn-lichsudangky').click(function (e) {

    e.preventDefault();
  
    let $this = $(this);

let $domForm = $this.closest('#form-lichsudangky');
     
    
    $.ajax({
        url: URL,
         data: new FormData($("form")[0]),
                contentType: false,
                processData: false,
      method : "POST",
    }).done(function (data) {
    
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
@endsection