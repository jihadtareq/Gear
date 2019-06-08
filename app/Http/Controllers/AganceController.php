<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use agance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Agance;
use DB;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AganceController extends Controller
{
    //
    public function index()
    {
    	return view('Categories.Agance');
    }
     public function searchh4()
    {
        return view('Agance.search4');
    }

   /* public function add_data(){
    	$data =$this->validate(request(),[
    		'kindofcarhave' =>'required',
    		'price' =>'required',
    		'description' =>'required',
        'agancename' =>'required',
               ]);
    	$data=['agancesower_id']->auth()->guard('agancesowner')->id;
    	agance::create($data);
    	return redirect('Categories.Agance');
    }*/

    public function insertform1(){
      return view('Agance.insertthedataofthecar');
   }

    public function store(Request $request)
{        $id=Auth::id();
         $owner=User::where('id',$id);
     request()->validate([
        'kindofcarhave' => 'required',
        'price' => 'required',
        'description' => 'required',
        'agancename' => 'required',
    ]);
    $image = $request->file('Car_Picture');
    $extension = $image->getClientOriginalExtension();
    Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

    $car = new Agance();
    $car->kindofcarhave = $request->kindofcarhave;
    $car->price = $request->price;
    $car->description = $request->description;
    $car->agancename = $request->agancename;
    $car->user_id = $id;

    $car->mime = $image->getClientMimeType();
    $car->original_filename = $image->getClientOriginalName();
    $car->filename = $image->getFilename().'.'.$extension;
    $car->save();
    echo "Car added successfully....<br/>";
    echo '<a href = "/insertcar">Click Here</a> to go back.';
}
public function all_car(Request $request)
    {
      $all_car=Agance::paginate(5);
      return view('Agance.show',compact('all_car'));
    }


    public function indexallcar(){
      $car = DB::select('select * from agances');
      return view('Agance.car_edit_view',['car'=>$car]);
   }

     public function show1($id) {
      $car = DB::select('select * from  agances where id = ?',[$id]);
      return view('Agance.car_update',['car'=>$car]);
   }

public function edit1(Request $request,$id) {
  $kindofcarhave = $request->input('kindofcarhave');
 DB::update('update agances set kindofcarhave = ? where id = ?',[$kindofcarhave,$id]);
 $price = $request->input('price');
 DB::update('update agances set price = ? where id = ?',[$price,$id]);
  $description = $request->input('description');
 DB::update('update agances set description = ? where id = ?',[$description,$id]);
 $agancename = $request->input('agancename');
 DB::update('update agances set agancename = ? where id = ?',[$agancename,$id]);
 echo "Record updated successfully.<br/>";
      echo '<a href = "/edit-records1">Click Here</a> to go back.';
   }

    public function indexdelete1(){
      $car = DB::select('select * from agances');
      return view('Agance.car_edit_view',['car'=>$car]);
   }
   public function destroy1($id) {
      DB::delete('delete from agances where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/delete-records1">Click Here</a> to go back.';
   }

}
