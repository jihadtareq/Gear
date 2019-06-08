<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\SparePart;
use DB;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class SparePartsController extends Controller
{
    public function index()
    {
    	return view('Categories.SpareParts');
    }


     public function insertformsparepart(){
      return view('Sparepart.insertthedataofthesparepart');
   }
   public function storesparepart(Request $request)
{
    request()->validate([
        'sparepart' => 'required',
        'price' => 'required',
        'description' => 'required',
        'storename' => 'required',
    ]);
    $image = $request->file('sparepart_Picture');
    $extension = $image->getClientOriginalExtension();
    Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

    $sparepart = new SparePart();
    $sparepart->sparepart = $request->sparepart;
    $sparepart->price = $request->price;
    $sparepart->description = $request->description;
    $sparepart->storename = $request->storename;
    $sparepart->user_id = $request->user_id;
    
    
    $sparepart->mime = $image->getClientMimeType();
    $sparepart->original_filename = $image->getClientOriginalName();
    $sparepart->filename = $image->getFilename().'.'.$extension;
    $sparepart->save();
    
   /*$owner=User::find();
   $sparepart->owners()->attach($owner);*/
   echo "sparepart added successfully....<br/>";
      echo '<a href = "/insertsparepart">Click Here</a> to go back.';

}

public function all_sparepart(Request $request)
    {
      $all_sparepart=SparePart::paginate(5);
      return view('Sparepart.showsparepart',compact('all_sparepart'));
    }

    public function indexallsparepart(){
      $sparepart = DB::select('select * from spareparts');
      return view('Sparepart.sparepart_edit_view',['sparepart'=>$sparepart]);
   }
   public function showsparepart($id) {
      $sparepart = DB::select('select * from  spare_parts where id = ?',[$id]);
      return view('Sparepart.sparepart_update',['sparepart'=>$sparepart]);
   }
   public function editsparepart(Request $request,$id) {
  $sparepart = $request->input('sparepart');
 DB::update('update spare_parts set sparepart = ? where id = ?',[$sparepart,$id]);
 $price = $request->input('price');
 DB::update('update spare_parts set price = ? where id = ?',[$price,$id]);
  $description = $request->input('description');
 DB::update('update spare_parts set description = ? where id = ?',[$description,$id]);
 $storename = $request->input('storename');
 DB::update('update spare_parts set storename = ? where id = ?',[$storename,$id]);
 echo "Record updated successfully.<br/>";
      echo '<a href = "/edit-recordssparepart">Click Here</a> to go back.';
   }

    public function indexdeletesparepart(){
      $sparepart = DB::select('select * from spare_parts');
      return view('Sparepart.sparepart_edit_view',['sparepart'=>$sparepart]);
   }
   public function destroysparepart($id) {
      DB::delete('delete from spare_parts where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/delete-recordssparepart">Click Here</a> to go back.';
   }

public function searchh5()
    {
        return view('Sparepart.search5');
    }

   
 }
