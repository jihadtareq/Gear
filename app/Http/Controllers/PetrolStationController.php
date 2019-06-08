<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PetrolStation;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PetrolStationController extends Controller
{
    //
    public function index()
    {
    	return view('Categories.PetrolStation');
    }

      public function all_petrolstation(Request $request)
    {
      $all_petrolstation=PetrolStation::paginate(5);
      return view('Categories.PetrolStation',compact('all_petrolstation'));
    }
    public function insertform(){
      return view('Categories.PetrolStation.insertpetrolstation');
   }
    

    public function insert_petrolstation(Request $request){
   
      $attribute=[
          'location'=>trans('admin.location'),
          'nameofpetrolstation'=>trans('admin.nameofpetrolstation'),];
      $data=$this->validate(request(),[
        'location'=>'required',
        'nameofpetrolstation'=>'required',
   ],[],$attribute);
      $add =new PetrolStation;
      $add->location= request('location');
      $add->nameofpetrolstation= request('nameofpetrolstation');
      $add->save();
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insertpetrolstation">Click Here</a> to go back.';
   }

   public function indexdelete(){
      $petrolstation = DB::select('select * from petrol_stations');
      return view('Categories.PetrolStation.petrolstation_edit_view',['petrolstation'=>$petrolstation]);
   }
   public function destroy($id) {
      DB::delete('delete from petrol_stations where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/delete-recordspetrolstation">Click Here</a> to go back.';
   }
  public function indexallpetrolstation(){
      $petrolstation = DB::select('select * from petrol_stations');
      return view('Categories.PetrolStation.petrolstation_edit_view',['petrolstation'=>$petrolstation]);
   }
   public function show($id) {
      $petrolstation = DB::select('select * from  petrol_stations where id = ?',[$id]);
      return view('Categories.PetrolStation.petrolstation_update',['petrolstation'=>$petrolstation]);
   }


   public function edit(Request $request,$id) {
      $location = $request->input('location');
 DB::update('update petrol_stations set location = ? where id = ?',[$location,$id]);
  $nameofpetrolstation = $request->input('nameofpetrolstation');
 DB::update('update petrol_stations set nameofpetrolstation = ? where id = ?',[$nameofpetrolstation,$id]);
echo "Record updated successfully.<br/>";
      echo '<a href = "/edit-recordspetrolstation">Click Here</a> to go back.';
}}
