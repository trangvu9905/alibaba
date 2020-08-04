<?php 
namespace App\Http\Controllers;
use App\Http\Requests\ThemphonghocRequest;
use App\Http\Requests\SuaphonghocRequest;
use App\Http\Requests\ThemlophocRequest;
use App\Http\Requests\KhaigianglopRequest;
use App\Lophoc;
use App\Chinhanh;
use Illuminate\Http\Request;
use App\Phonghoc;
use App\Dangki;
use App\Chuongtrinh;
use App\Khoahoc;
use App\Hocsinh;	
use Mail;	
		

	class LophocController extends Controller{
		public function home()
    	{
    	return view('admin/lophoc/home-lophoc');
    	}
    	public function phonghoc()
    	{
            $phonghoc=Phonghoc::all();
            $chinhanh=Chinhanh::all();
    	return view('admin/lophoc/phonghoc',['chinhanh'=>$chinhanh,'phonghoc'=>$phonghoc]);
    	}
        public function postthemphonghoc(ThemphonghocRequest $request)
    {
      if ($request->ajax()) {
           
          $output = '';
          
            $id = new Phonghoc;
            $id->idchinhanh=$request->chinhanh;
            $id->ten=$request->namephonghoc;
            $id->mota=$request->mota;
            $id->trangthietbi=$request->test;
            $id->save();
           $phonghoc=Phonghoc::all();
            if ($phonghoc) {
               $i=1;
                foreach ($phonghoc as $ph) {

                    $output .= '<tr>
                      <td>'.$i.'</td>
                    <td>' . $ph->ten . '</td>
                    <td>' . $ph->mota . '</td>
                    
                    <td>   
                    <a onclick="event.preventDefault();editphonghoc('.$ph->id.')" class=" edit btn btn-default btn-sm m-r-xs" value="'.$ph->id.'"><i class="fa fa-pencil"></i>Sửa</a>     
                    <a  href="http://localhost/alibaba/public/xoachinhanh/'.$ph->id.'" class="btn btn-default btn-sm m-r-xs js-xoaphonghoc"><i class="fa fa-times"></i>Xóa</a>
                </td>
                    </tr>';
                    $i++;
                }
            }
          return Response($output);
        }
    }
  
    public function suaphonghoc($id)
    {
         $ph = Phonghoc::find($id);

        return response()->json([
            'error' => false,
            'ph'  => $ph,
        ], 200);
    }
    // sua phong hoc

      public function postsuaphonghoc(SuaphonghocRequest $request,$id)
    {
      if ($request->ajax()) {
          
          $output = '';
    
            $id =Phonghoc::find($id);
           $id->idchinhanh=$request->chinhanh;
            $id->ten=$request->namephonghoc;
            $id->mota=$request->mota;
            $id->trangthietbi=$request->test;
            $id->save();
           $phonghoc=Phonghoc::all();
            if ($phonghoc) {
              $a="{{url('')}}";
                $i=1;
                foreach ($phonghoc as $ph) {

                    $output .= '<tr>
                      <td>'.$i.'</td>
                    <td>' . $ph->ten . '</td>
                    <td>' . $ph->mota . '</td>
                    
                    <td>   
                    <a onclick="event.preventDefault();editphonghoc('.$ph->id.')" class=" edit btn btn-default btn-sm m-r-xs" value="'.$ph->id.'"><i class="fa fa-pencil"></i>Sửa</a>     
                    <a  href="http://localhost/alibaba/public/xoachinhanh/'.$ph->id.'" class="btn btn-default btn-sm m-r-xs js-xoaphonghoc"><i class="fa fa-times"></i>Xóa</a>
                </td>
                    </tr>';
                    $i++;
                }
            }
          return Response($output);
        }
    }
  
    public function xoaphonghoc(Request $request,$id)
    {
      if ($request->ajax()) {

         $phonghoc = Phonghoc::find($id);
         if($phonghoc)
         {
            $phonghoc->delete();
         }
         

      
            return response(['code'=>200]);
    }
}
    // chờ mở lớp
    public function chomolop(){

        $lophoc=Lophoc::all();
        $chinhanh=Chinhanh::all();
        $chuongtrinh=Chuongtrinh::all();
        $khoahoc=Khoahoc::all();
       // $dangki=Dangki::where('idlop',0)->get();
        $dangki=Dangki::groupBy('idkhoahoc')->get(['idkhoahoc']);
        $re=[];
        
        foreach($dangki as $dk)
        {
          $test= Dangki::where('idkhoahoc',$dk->idkhoahoc)->get();
          $re[$dk->idkhoahoc]['name']=$dk->Khoahoc->ten;
          $re[$dk->idkhoahoc]['total']=$test->count();
          $re[$dk->idkhoahoc]['idkhoahoc']=$dk->idkhoahoc;
        }
       // dd( $dangki);
     
      return view('admin/lophoc/chomolop',['lophoc'=>$lophoc,'dangki'=>$dangki,'re'=>$re,'chinhanh'=>$chinhanh,'chuongtrinh'=>$chuongtrinh,'khoahoc'=>$khoahoc]);
    }
    public function dschomolop($id)
    {
      $output = '';
      $dangki=Dangki::where('idlop',$id)->get();
      $i=1;
      if ($dangki) {

               foreach ($dangki as $dk) {
                 if($dk->hocthu==0)
                 {
                   $hocthu='Không';
                 }
                 else
                 {
                  $hocthu='Có';
                 }
                
                   $output .= '<tr>
                   <td class="text-center">' .$i++ . '</td>
                   <td class="text-center">' . $dk->Hocsinh->ten . '</td>
                   <td class="text-center">' .$dk->Hocsinh->dienthoai . '</td>
                   <td class="text-center">' .$dk->Hocsinh->email . '</td>
                   <td class="text-center">' .$dk->timethem. '</td>
                   <td class="text-center">' .$hocthu. '</td>
                   </tr>';
               }
           }
         return Response($output);
    }

    // hiển thị danh sách lớp học


    public function hienthilophoc($id)
    {
      $output = '';
      $lophoc=Lophoc::where([['idkhoahoc',$id],['xacnhan',0]])->get();
      $dangki=Dangki::groupBy('idlop')->get(['idlop']);
      $i=1;
      if ($lophoc) {

               foreach ($lophoc as $lh) {
                $total=Dangki::where('idlop',$lh->id)->get();
                
                   $output .= '<tr>
                   <td class="text-center">' .$i++ . '</td>
                   <td class="text-center">' . $lh->Malop . '</td>
                   <td class="text-center">' . $lh->ten . '</td>
                   <td class="text-center">
                         <a href="" onclick="event.preventDefault();hienthichomolop(' . $lh->id . ')"> 
                              <span class="bg-success-aler">' .  $total->count() . '</span>
                         </a>
                    </td>
                    <td class="text-center">
                    <a href="" onclick="event.preventDefault();khaigianglop(' . $lh->id . ')" class="btn btn-primary"> 
                         Khai giảng
                    </a>
               </td>
                   </tr>';
               }
           }
         return Response($output);
    }

    

   
    //tim phòng học
    public function timphonghoc(Request $request){
      if ($request->ajax()){
        $output = '';
       $chinhanh=$request->timchinhanh;

        $phonghoc=Phonghoc::where('idchinhanh','=',$chinhanh)->get();
         if($chinhanh==0)
         {
             $phonghoc=Phonghoc::all();
         }
         

          if ($phonghoc) {
             $a="{{url('')}}";
               $i=1;
               foreach ($phonghoc as $ph) {

                   $output .= '<tr>
                     <td>'.$i.'</td>
                   <td>' . $ph->ten . '</td>
                   <td>' . $ph->mota . '</td>
                   
                   <td>   
                   <a onclick="event.preventDefault();editphonghoc('.$ph->id.')" class=" edit btn btn-default btn-sm m-r-xs" value="'.$ph->id.'"><i class="fa fa-pencil"></i>Sửa</a>     
                   <a  href="http:8000//localhost/alibaba2/public/xoachinhanh/'.$ph->id.'" class="btn btn-default btn-sm m-r-xs js-xoaphonghoc"><i class="fa fa-times"></i>Xóa</a>
               </td>
                   </tr>';
                   $i++;
               }
          }
          return Response($output);

      }

    }

    // thêm mới lớp học
    public function postthemlophoc(ThemlophocRequest $request)
    {
      if ($request->ajax()) {
           
          $output = '';
        
          $lophoc = new Lophoc;
          $lophoc->ten= $request->name;
          $lophoc->mota= $request->mota;
          $lophoc->xacnhan= 0;
          $lophoc->siso= $request->siso;
          $lophoc->Malop= $request->malophoc;
          $lophoc->idchinhanh= $request->chinhanh;
          $lophoc->idchuongtrinh= $request->chuongtrinh;
          $lophoc->idkhoahoc= $request->khoahoc;
          $lophoc->save();
          return Response($output);
        }
    }
     // lớp dang học
     public function lopdanghoc()
      {
         $chinhanh=Chinhanh::all();
         $lophoc=Lophoc::all();
      return view('admin/lophoc/lopdanghoc',['lophoc'=>$lophoc, 'chinhanh'=>$chinhanh]);
      }
      // xóa lớp học
      public function xoalophoc(Request $request,$id)
    {
     
      if ($request->ajax()) {

         $lophoc = Lophoc::find($id);
         
         if($lophoc)
         {
            $lophoc->delete();
         }
            return response(['code'=>200]);
        }
    }

    //tim lớp học
     public function timlophoc(Request $request){
       if ($request->ajax()){
         $output = '';
        $chinhanh=$request->timlophoc;

         $lophoc=Lophoc::where('idchinhanh','=',$chinhanh)->get();
         

          if($chinhanh==0)
          {
              $lophoc=Lophoc::all();
          }
          
           if ($lophoc) {
              $a="{{url('')}}";
                $i=1;
                foreach ($lophoc as $lh) {

                            $in=$lh->ngaybatdau;
                                                
                                               $datein= date_create("$in");
                                               $tg1 = date_format($datein,"d/m/Y") ;
                                               $date=date("d/m/Y");
                                               // echo $date;
                                               // die();
                                                
                                                 $out=$lh->ngayketthuc;
                                                 $dateout= date_create("$out");
                                                  $tg2= date_format($dateout,"d/m/Y") ;
                                            if($tg1 <= $date && $date <= $tg2)
                                            {



                    $output .= '
                                    
                                <tr>
                                <td class="text-center">'.$i.'</td>
                                <td>
                                 <b><a >'.$lh->ten.'<i class="btedit fa fa-pencil"></i></a></b><br>
                             </td>
                             
                                 <td>
                                    <br>

                          </td>
                                 <td>
                                    <span class="badge bg-success">'.$lh->buoihoc.'</span>
                                </td>
                                <td> 
                                    <a  class="badge bg-success" title="Xem danh sách lớp học">'.$lh->siso.'</a> 
                                    <a  class="badge bg-success" title="Thêm học viên vào lớp"><i class="i i-plus2"></i></a>
                                </td>
                                <td class="text-center">'.$lh->buoihoc.'</td>
                                <td>
                                    <a onclick="event.preventDefault();themtkb('.$lh->id.')" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Thời Khóa Biểu</a>
                                    <a href="http://localhost/alibaba/public/xoalophoc/'.$lh->id.'" class="btn btn-default btn-sm js-xoalophoc"><i class="fa fa-times"></i> Xóa</a></td>
                                </tr>
                                          
                    ';
                    $i++;
                }
                  }
           }
           return Response($output);

       }

     }
     
     
      // khai giảng lớp học
      public function getkhaigianglop($id)
      {
         $lh =Lophoc::find($id);
         $chinhanh=$lh->Chinhanh->ten;
         $chuongtrinh=$lh->Chuongtrinh->ten;
         $khoahoc=$lh->Khoahoc->ten;
          return response()->json([
              'error' => false,
              'lh'  => $lh,
              'chinhanh'  => $chinhanh,
              'chuongtrinh'  => $chuongtrinh,
              'khoahoc'  => $khoahoc,
          ], 200);
      }
      public function khaigianglop(khaigianglopRequest $request,$id)
      {
        if ($request->ajax()) {
             
            $output = '';
          
            $lophoc = Lophoc::find($id);
            $lophoc->ngaybatdau= $request->batdau;
            $lophoc->ngayketthuc= $request->ketthuc;
            $lophoc->xacnhan= 1;
            $lophoc->save();
            $dangki=Dangki::where('idlop',$id)->get();
            
            foreach($dangki as $dk)
            {
              $hocvien=Hocsinh::find($dk->idhocsinh);
              $hocvien->xacnhanhocvien=1;
              $layemail=[
                'email'=>$hocvien->email,
              ];

              $data=[
                 'name'=>$hocvien->ten,
                 'lop'=> $lophoc->ten,
                 'malop'=> $lophoc->Malop,
                 'batdau'=> $lophoc->ngaybatdau,
                 'ketthuc'=> $lophoc->ngayketthuc,
                 'khoahoc'=> $lophoc->Khoahoc->ten,
                 'chinhanh'=> $lophoc->Chinhanh->ten,
              ];
              
              $email=[
                $layemail['email'],
              ];
              Mail::send('viewmail',$data,function($mes) use ($data,$email)
              {
                $mes->from('thin2kpro@gmail.com');
                $mes->to($email,'viewmail')->subject('Email đăng ký khóa học Trung tâm ALIBABA');
              });

              $hocvien->save();
            }
           
            return Response($output);
          }
      }
  // tìm kiếm khóa học đăng ký
  public function timkhoahocdangki(Request $request)
  {
   if ($request->ajax()) {
         
         $output = '';
         $chinhanh=$request->chinhanh;
        if( $chinhanh==0)
        {
          $dangki=Dangki::groupBy('idkhoahoc')->get(['idkhoahoc']);
           $re=[];
        
        foreach($dangki as $dk)
        {
          $test= Dangki::where('idkhoahoc',$dk->idkhoahoc)->get();
          $re[$dk->idkhoahoc]['name']=$dk->Khoahoc->ten;
          $re[$dk->idkhoahoc]['total']=$test->count();
          $re[$dk->idkhoahoc]['idkhoahoc']=$dk->idkhoahoc;
        }
        }
        else
        {
          $dangki=Dangki::groupBy('idkhoahoc')->get(['idkhoahoc']);
          $re=[];
       
       foreach($dangki as $dk)
       {
         $test= Dangki::where([['idkhoahoc',$dk->idkhoahoc],['idchinhanh',$chinhanh]])->get();
         $re[$dk->idkhoahoc]['name']=$dk->Khoahoc->ten;
         $re[$dk->idkhoahoc]['total']=$test->count();
         $re[$dk->idkhoahoc]['idkhoahoc']=$dk->idkhoahoc;
       }
        }
        $i=1;
          if ($re) {

           
              foreach ($re as $dk) {
                
                  $output .= '<tr>
                  <td class="text-center">'.$i++.'</td>
                  <td class="text-center">'.$dk['name'].'</td>
                  <td class="text-center">
                  <a href="" onclick="event.preventDefault();hienthichomolop('.$dk['idkhoahoc'].')"> 
                  <span class="bg-success-aler">'.$dk['total'].'</span>
                  </a>
                  </td>
           <td class="text-center">
              <a href=""  onclick="event.preventDefault();hienthilophoc('.$dk['idkhoahoc'].')"title="Xem danh sách lớp học" class="btn btn-default btn-sm m-r-xs" >
                  <i class="i i-plus2"></i> Danh sách lớp học
              </a>
              </td>
                  </tr>';
              }
          }
          
         
         
        return Response($output);
      }


  }
  public function lopketthuc()
  {
    $chinhanh=Chinhanh::all();
     $lophoc=Lophoc::all();
  return view('admin/lophoc/lopdaketthuc',['lophoc'=>$lophoc,'chinhanh'=>$chinhanh]);
  
  }
  // xóa lớp học kết thúc
   public function xoalophockt(Request $request,$id)
{
 
  if ($request->ajax()) {

     $lophoc = Lophoc::find($id);
     
     if($lophoc)
     {
        $lophoc->delete();
     }
        return response(['code'=>200]);
    }
}
//tim lớp học
 public function timlophockt(Request $request){
   if ($request->ajax()){
     $output = '';
    $chinhanh=$request->timlophockt;
     $tungay=$request->tungay;
     // dd($tungay);

    $denngay=$request->denngay;
    // dd($denngay);
    $contracttungay= date('Y-m-d', strtotime("$tungay"));
    
    $datemin=date('Y-m-d', strtotime("1970-01-02"));

    $contractdenngay= date('Y-m-d', strtotime("$denngay"));
    
     $lophoc=Lophoc::where('idchinhanh','=',$chinhanh)->get();
       
      if($chinhanh==0)
      {
          $lophoc=Lophoc::all();
      }
      
       if ($lophoc) {
          $a="{{url('')}}";
            $i=1;
            
            foreach ($lophoc as $lh) {

                        $in=$lh->ngaybatdau;
                                           
                                             $out=$lh->ngayketthuc;
                                             $paymentDate = date('Y-m-d');
                                            $paymentDate=date('Y-m-d', strtotime($paymentDate));
                                            //echo $paymentDate; // echos today! 
                                            $contractDateBegin = date('Y-m-d', strtotime("$in"));
                                            $contractDateEnd = date('Y-m-d', strtotime("$out"));
                                  
                                 if( $datemin<=$contracttungay && $datemin<=$contractdenngay ){
                                  if( $contracttungay<=$contractDateEnd && $contractDateEnd <= $contractdenngay){
                                       $output .= '
                                
                            <tr>
                            <td class="text-center">'.$i.'</td>
                            <td>
                             <b><a >'.$lh->ten.'<i class="btedit fa fa-pencil"></i></a></b><br>
                         </td>
                         
                             <td>
                                <br>

                      </td>
                             <td>
                                <span class="badge bg-success">'.$lh->buoihoc.'</span>
                            </td>
                            <td> 
                                <a  class="badge bg-success" title="Xem danh sách lớp học">'.$lh->siso.'</a> 
                                <a  class="badge bg-success" title="Thêm học viên vào lớp"><i class="i i-plus2"></i></a>
                            </td>
                            <td class="text-center">'.$lh->buoihoc.'</td>
                            <td>
                                <a onclick="event.preventDefault();themtkb('.$lh->id.')" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Thời Khóa Biểu</a>
                                <a href="http://localhost/alibaba/public/lop-hoc/xoalophockt/'.$lh->id.'" class="btn btn-default btn-sm js-xoalophoc"><i class="fa fa-times"></i> Xóa</a></td>
                            </tr>
                                      
                ';
                $i++;
                                  }
                              }
                              
                        
                  elseif( $contractDateEnd <=  $paymentDate ){
                $output .= '
                                
                            <tr>
                            <td class="text-center">'.$i.'</td>
                            <td>
                             <b><a >'.$lh->ten.'<i class="btedit fa fa-pencil"></i></a></b><br>
                         </td>
                         
                             <td>
                                <br>

                      </td>
                             <td>
                                <span class="badge bg-success">'.$lh->buoihoc.'</span>
                            </td>
                            <td> 
                                <a  class="badge bg-success" title="Xem danh sách lớp học">'.$lh->siso.'</a> 
                                <a  class="badge bg-success" title="Thêm học viên vào lớp"><i class="i i-plus2"></i></a>
                            </td>
                            <td class="text-center">'.$lh->buoihoc.'</td>
                            <td>
                                <a onclick="event.preventDefault();themtkb('.$lh->id.')" class="btn btn-default btn-sm m-r-xs"><i class="fa fa-pencil"></i> Thời Khóa Biểu</a>
                                <a href="http://localhost/alibaba/public/lop-hoc/xoalophockt/'.$lh->id.'" class="btn btn-default btn-sm js-xoalophoc"><i class="fa fa-times"></i> Xóa</a></td>
                            </tr>
                                      
                ';
                $i++;
            }
              
              }
       }
       return Response($output);

   }

 }

      

	}
 ?>