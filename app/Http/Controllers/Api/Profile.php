<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\User;
use App\SparePart;
use App\Agance;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;

use stdClass;
use DB;

class Profile extends Controller
{
    public function profileOwners(){
        //$obj = new stdClass();
    	$id=Auth::id();
    	$type=Auth::user()->type;
    	$owner=User::where('id',$id);
        //$owner=Auth::user();
        //$sparepart=DB::select('select * from spareparts where id= 2');

    	if($type == 2)
    	{ 
    		
    	$q=$owner->with(['spareparts'])->orderBy('created_at')->get();
    	return response()->json($q);
    	}
    	elseif($type == 1)
    	{
    	$q2=$owner->with(['showrooms'])->orderBy('created_at')->get();
        return response()->json($q2);



    	}
    	else
    	{
    		return redirect()->back();
    	}
  
}
 public function storeSparepart(Request $request)
{   

        $type=Auth::user()->type;
        $id=Auth::id();
        $owner=User::where('id',$id);


    request()->validate([
        'sparepart' => 'required',
        'price' => 'required',
        'description' => 'required',
        'storename' => 'required',
    ]);
   if ($type == 2) {
       
   
    $image = $request->file('sparepart_Picture');
    $extension = $image->getClientOriginalExtension();
    Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

    $sparepart = new SparePart();
    $sparepart->sparepart = $request->sparepart;
    $sparepart->price = $request->price;
    $sparepart->description = $request->description;
    $sparepart->storename = $request->storename;
    $sparepart->user_id = $id;

     $sparepart->mime = $image->getClientMimeType();
     $sparepart->original_filename = $image->getClientOriginalName();
     $sparepart->filename = $image->getFilename().'.'.$extension;
     //$sparepart->size = $image->getSize();
    $sparepart->save();
    $obj =new stdClass();
    $obj->data=$owner->with(['spareparts'])->get();
    return response()->json($obj);
    
   }
   else{
    return response()->json(['message'=>'Sorry you are not allowed to access here']);
   } 
   //$owner=User::find();
   //$sparepart->owners()->attach($owner);
}
public function storeAgance(Request $request)
{   

        $type=Auth::user()->type;
        $id=Auth::id();
        $owner=User::where('id',$id);


         request()->validate([
        'kindofcarhave' => 'required',
        'price' => 'required',
        'description' => 'required',
        'agancename' => 'required',
        ]);
   if ($type == 1) {

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
    $obj =new stdClass();
    $obj->data=$owner->with(['showrooms'])->get();
    return response()->json($obj);
    
   } 
   else{
    return response()->json(['message'=>'Sorry you are not allowed to access here']);}
   //$owner=User::find();
   //$sparepart->owners()->attach($owner);
}
public function showall(){
     $id=Auth::id();
     $type=Auth::user();
     $owner=Auth::user();
    // $obj->data=$owner->with(['showrooms'])->get();
     $objArr = [];
     $showroom = User()->showrooms->get();
     //$showrooms = Agance::find($id);
   // $showrooms =Agance::all();
    //$owners=$showrooms->owner;
//echo $showrooms->owner->name;
   

      foreach ($showroom as $key => $showr) {
      $obj =new stdClass();
      $
      $obj->storename = $showr->name;
      // $obj->kindofcarhave = $showroom->kindofcarhave;
      // $obj->price = $showroom->price;
      // $obj->description = $showroom->description;
      array_push($objArr,$obj);

    // $obj->name = $showroom->owner()->get('name');
       }
    // $obj->ownerName=$showrooms->owner()->get('name');



    // $obj->data=$showrooms->owner()->get();

     //return ($obj);
     //$obj->data2=$owner->with(['spareparts'])->get();
     $obj1 =new stdClass();
     $obj1->sds=$objArr;
      return response()->json($obj1);
}
public function showallsparepart(){
     $id=Auth::id();
     $type=Auth::user()->type;
     $owner=Auth::user();
     
     $obj =new stdClass();
     $obj->sp =DB::select('select users.name,users.mobile,spareparts.sparepart,spareparts.price,spareparts.storename,spareparts.description,spareparts.filename,spareparts.mime,spareparts.original_filename from spareparts INNER JOIN users ON spareparts.user_id =users.id AND users.type=2 ');
     //$obj=$owner->with(['spareparts'])where($sp,=,$id)->orderBy('created_at')->get();
     return response()->json($obj);
}
public function showallcars(){
     $id=Auth::id();
     $type=Auth::user()->type;
     $owner=Auth::user();
     
     $obj =new stdClass();
     $obj->ag =DB::select('select users.name,users.mobile,users.address,users.area,agances.kindofcarhave,agances.price,agances.agancename,agances.description,agances.filename,agances.mime,agances.original_filename from agances INNER JOIN users ON agances.user_id =users.id AND users.type=1 ');
     //$obj=$owner->with(['spareparts'])where($sp,=,$id)->orderBy('created_at')->get();
     return response()->json($obj);
}
public function addtocart($id){
    
}
public function showMechanics(){

}
public function showPetrolStation(){
    
}
}