<?php

namespace App\Http\Controllers;

use App\Hocsinh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Hocsinh::all();

        return view('admin/dshocvientiemnang')->with('tasks',$tasks);
    }

    public function store(Request $request)
    {
       $validator = Validator::make($request->input(), array(
            'fullname' => 'required',
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }
      
       
        $tasks = new Hocsinh;
       $tasks->ten=$request->fullname;
       $tasks->sex=$request->sex;
       $tasks->tuoi=$request->tuoi;
        $tasks->diachi=$request->andress;
       $tasks->type=$request->job;
       if($request->job == '1'){
        $tasks->PHHS_ten=$request->fullname2;
        $tasks->dienthoai=$request->telephone;
        $tasks->email=$request->email;
        $tasks->tuoi2=$request->tuoi2;
        $tasks->job=$request->job2;
       }
       if($request->job == '2'){
        $tasks->truong=$request->school;
        $tasks->email=$request->email1;
        $tasks->dienthoai=$request->telephone1;
       }
       if($request->job == '3'){
        $tasks->email=$request->email2;
        $tasks->dienthoai=$request->telephone2;
        $tasks->job=$request->job3;
       }
       $tasks->type2= '1';
       $tasks->save();

        return response()->json([
            'error' => false,
            'tasks'  => $tasks,
        ], 200);
       
        

       // $tasks=new Hocsinh;
       // $tasks->ten=$request->name;
       // $tasks->tuoi=$request->tuoi;
       // $tasks->sex=$request->sex;
       // $tasks->ngaysinh=$birthday;    
       // $tasks->tuoi=$request->tuoi;
       // $tasks->diachi=$request->andress;
       // $tasks->type=$request->job;
       // if($request->job == 1){
       //  $tasks->PHHS_ten=$request->fullname2;
       //  $tasks->dienthoai=$request->telephone;
       //  $tasks->email=$request->email;
       //  $tasks->tuoi2=$request->tuoi2;
       //  $tasks->job=$request->job2;
       // }
       // if($request->job == 2){
       //  $tasks->truong=$request->school;
       //  $tasks->email=$request->telephone2;
       //  $tasks->dienthoai=$request->telephone1;
       // }
       // if($request->job == 3){
       //  $tasks->email=$request->email2;
       //  $tasks->dienthoai=$request->email1;
       //  $tasks->job=$request->job3;
       // }
       // $tasks->type2= '1';
       // $tasks->save();
       //  return response()->json([
       //      'error' => false,
       //      'tasks'  => $tasks,
       //  ], 200);
    }

    public function show($id)
    {
        $task = Hocsinh::find($id);

        return response()->json([
            'error' => false,
            'task'  => $task,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->input(), array(
           
         
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }
        $image = $request->file('image');
         $new_name = rand() . '.' . $image->getClientOriginalExtension();
       $image->move(public_path('images'), $new_name);
        $tasks = Hocsinh::find($id);
         
        $tasks->ten =  $request->input('fullname');
        $tasks->sex = $request->input('sex');
        $tasks->tuoi = $request->input('tuoi');
         $tasks->diachi = $request->input('andress');
          $tasks->type = $request->input('job');
           $tasks->imageupload=$img;
      
          if($request->input('job') == '1'){
        $tasks->PHHS_ten=$request->input('fullname2');
        $tasks->dienthoai=$request->input('telephone');
        $tasks->email=$request->input('email');
        $tasks->tuoi2=$request->input('tuoi2');
        $tasks->job=$request->input('job2');
       }
       if($request->input('job')== '2'){
        $tasks->truong=$request->input('scholl');
        $tasks->email=$request->input('email1');
        $tasks->dienthoai=$request->input('telephone1');
       }
       if($request->job == '3'){
        $tasks->email=$request->input('email2');
        $tasks->dienthoai=$request->input('telephone2');
        $tasks->job=$request->input('job3');;
       }
       $tasks->type2= '1';
       $tasks->save();
        return response()->json([
            'error' => false,
            'tasks'  => $tasks,
        ], 200);
    }

    public function destroy($id)
    {
        $task = Hocsinh::destroy($id);

        return response()->json([
            'error' => false,
            'task'  => $task,
        ], 200);
    }
}
