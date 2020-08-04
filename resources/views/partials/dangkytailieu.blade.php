
      <div id="dangkytaileu" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title text-center primecolor">Đăng kí khóa học</h3>
            </div>
            
            <div class="modal-body" style="overflow: hidden;">
             
              
                   <form action="" method="POST" id="form-dangkytailieu">
                        @csrf
                       <input type="hidden" name="hocvien" value="{{$idhocvien}}">
                        <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label">Chọn Chi Nhánh:</label>
                    <select name="chinhanh" id="chinhanh"  class="form-control">
                        <option>Chọn chi nhánh</option>
                        @foreach($chinhanh as $cn)
                    <option value="{{$cn->id}}">{{$cn->ten}}</option>
                       @endforeach
                         <span class="error-form"></span>
                </select>
                           
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label">Chọn Nhóm:</label>
                    <div id="listchuongtrinh">
                        <select id="chuongtrinh" class="form-control" name="chuongtrinh">
                            <option>Chọn chương trình</option>
                          @foreach($chuongtrinh as $ct)
                    <option value="{{$ct->id}}">{{$ct->ten}}</option>
                       @endforeach
                        </select>
                    </div>
                    <div id="listcapdo"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class=" col-sm-12">
                <div class="form-group">
                    <label class="control-label">Tài liệu:</label>
                    <div id="listkhoahoc">
                        <select id="khoahoc" name="khoahoc" class="form-control" >
                            <option>Chọn khóa học</option>
                             @foreach($khoahoc as $kh)
                            <option value="{{$kh->id}}">{{$kh->ten}}</option>
                             @endforeach
                           </select></div>
                </div>
            </div>
            <div class=" col-sm-12">
                <div class="form-group">
                    <label class="control-label">Lớp học:</label>
                    <div id="listlophoc">
                     <select id="lophoc" name="lophoc" class="form-control"> 
                        <option value="-1">Chờ mở lớp</option>
                          @foreach($lophoc as $lh)
                            <option value="{{$lh->id}}">{{$lh->ten}}</option>
                             @endforeach
                    </select></div>
                </div>
            </div>
            <div class=" col-sm-12">
                <div class="form-group">
                    <label class="control-label">Học Phí </label>
                    <div  id="hocphi">
                    <input name="hocphi" type="text" class="form-control" id="hp">
                    </div>
                </div>
            </div>
            <div class=" col-sm-6">
                <div class="form-group">
                    <label class="control-label">Chương trình khuyến mãi</label>
                    <select name="khuyenmai" id="khuyenmai"  class="form-control ">
                        <option>Chọn chương trình khuyến mãi</option>
                   <option value="0">Không</option>
                          @foreach($khuyenmai as $km)
                            <option value="{{$km->giatri}}">{{$km->makm}} ({{$km->giatri}}%)</option>
                             @endforeach
                  </select>
                  
                </div>
            </div>
            <div class=" col-sm-6">
                <div class="form-group">
                    <label class="control-label">Chiết khấu</label>
                    <div id="chietkhau">
                        
                   
                    <input name="giam" type="text" id="giam" class="form-control " value="0"  style="background-color: #ffe907">
                     </div>
                </div>
            </div>
            <div class=" col-sm-12">
                <div class="form-group">
                    <label class="control-label">Học Thử </label>
                    <div class="form-control">
                        <input type="radio" name="hocthu" value="1" id="hocthu1">
                        Có 
                            <input type="radio" name="hocthu" value="0" id="hocthu2" checked="checked">
                        Không
                    </div>


                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label">Học Phí phải thu</label>
                    <input name="phaithu" type="text" id="phaithu" class="form-control " style="color: red; background-color: #ffe907; font-weight: bold" readonly="true">
                </div>
            </div>


            <div class="col-sm-12" id="Listkhofollow"></div>
            <div class="col-sm-12">
                <div class="form-group">
                      <button type="submit" class="btn btn-primary js-btn-login">Đăng kí</button>

                </div>
            </div>


                       
                    </form>
               
            </div>
        </div>

    </div>
</div>
  