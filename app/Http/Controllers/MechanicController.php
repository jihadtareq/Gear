<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mechanic;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MechanicController extends Controller
{
    //
       public function index()
    {
        return view('Categories.Mechanic');
    }


    public function searchh2()
    {
        return view('search2');
    }
    public function searchh3()
    {
        return view('search3');
    }
     public function all_mechanic(Request $request)
    {
      $all_mechanic=Mechanic::paginate(5);
      return view('Categories.Mechanic',compact('all_mechanic'));
    }





    /////////////////////////////////////////////////////////////
public function insertform(){
      return view('Categories.Mechanic.insertmechanic');
   }
   public function inset_mechanic(Request $request){
   
      $attribute=[
          'name_shop'=>trans('admin.name_shop'),
          'mobile'=>trans('admin.mobile'),
          'area'=>trans('admin.area'),
          'address'=>trans('admin.address'),
          'worktime'=>trans('admin.worktime'),
          'Wash'=>trans('admin.Wash'),
          'description'=>trans('admin.description'),
          'kindofcartofix'=>trans('admin.kindofcartofix'),];
      $data=$this->validate(request(),[
     'name_shop'=>'required',
     'mobile'=>'required',
     'area'=>'required',
     'address'=>'required',
     'worktime'=>'required',
     'Wash'=>'required',
     'description'=>'required',
     'kindofcartofix'=>'required',
   ],[],$attribute);
      $add =new Mechanic;
      $add->name_shop= request('name_shop');
      $add->mobile= request('mobile');
      $add->area= request('area');
      $add->address= request('address');
      $add->worktime= request('worktime');
      $add->Wash= request('Wash');
      $add->description= request('description');
      $add->kindofcartofix=request('kindofcartofix');    
      $add->save();
      return redirect('insert');
     /* $id_number = $request->input('id_number');
      DB::insert('insert into mechanics (id_number) values(?)',[$id_number]); */
      //echo "Record inserted successfully.<br/>";
      //echo '<a href = "/insert">Click Here</a> to go back.';
   }


   
 

   
    public function indexdelete(){
      $mechanic = DB::select('select * from mechanics');
      return view('Categories.Mechanic.mechanic_edit_view',['mechanic'=>$mechanic]);
   }
   public function destroy($id) {
      DB::delete('delete from mechanics where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/delete-records">Click Here</a> to go back.';
   }
  
 public function indexallmechanic(){
      $mechanic = DB::select('select * from mechanics');
      return view('Categories.Mechanic.mechanic_edit_view',['mechanic'=>$mechanic]);
   }
   public function show($id) {
      $mechanic = DB::select('select * from  mechanics where id = ?',[$id]);
      return view('Categories.Mechanic.mechanic_update',['mechanic'=>$mechanic]);
   }
  
public function edit(Request $request,$id) {
  $name_shop = $request->input('name_shop');
 DB::update('update mechanics set name_shop = ? where id = ?',[$name_shop,$id]);
 $mobile = $request->input('mobile');
 DB::update('update mechanics set mobile = ? where id = ?',[$mobile,$id]);
  $area = $request->input('area');
 DB::update('update mechanics set area = ? where id = ?',[$area,$id]);
  $address = $request->input('address');
 DB::update('update mechanics set address = ? where id = ?',[$address,$id]);
  $worktime = $request->input('worktime');
 DB::update('update mechanics set worktime = ? where id = ?',[$worktime,$id]);
  $Wash = $request->input('Wash');
 DB::update('update mechanics set Wash = ? where id = ?',[$Wash,$id]);
  $kindofcartofix = $request->input('kindofcartofix');
 DB::update('update mechanics set kindofcartofix = ? where id = ?',
  [$kindofcartofix,$id]);
  $description = $request->input('description');
 DB::update('update mechanics set description = ? where id = ?',[$description,$id]);
 echo "Record updated successfully.<br/>";
      echo '<a href = "/edit-records">Click Here</a> to go back.';
     // return redirect('all/mechanic'); 
   }

     
}
