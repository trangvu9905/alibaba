<!-- Edit Modal HTML -->
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
          <input class="form-control" name="birthday" id="ngaysinh" placeholder="Ngày sinh" autofocus="" type="date" onchange="myFunction()"> 
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
                    <input name="id" type="hidden" value="0">
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