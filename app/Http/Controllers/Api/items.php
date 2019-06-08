<?php

namespace App\Http\Controllers\Api;
use App\SparePart;
use App\User;
use App\Agance;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use Validator;

class items extends Controller
{
	public function index(){
		$Products=auth()->user()->spareparts;
		return response()->json(['succuss'->true,
	                              'data'->$Products]);
	}
	// public function show($id){
	// 	$product=auth()->user()->spareparts()->find($id);
	// 	if(!$product){
	// 		return response()->json([
	// 			'success'->false,
	// 		    'message'=>'Invalid Information'],400);
	// 	}
	// 	return response()->json([
	// 		'success'->true,
	// 	    'data'->$product->toArray()],400);
	// }

	public function store(Request $request)
	{
		$validate=Validator::make($request->all(),[
			'sparepart'=>'required',
	        'price'=>'required|integer',
	        'description'=>'required',
	        'storename'=>'required|string|max:255',
	                          ]);
		$product=new SparePart();
		$product->sparepart=$request->sparepart;
		$product->price=$request->price;
		$product->description=$request->description;
		$product->storename=$request->storename;
        
		if(auth()->user()->spareparts()->save($product))
		{
			return response()->json([
				'success'->true,
		        'data'->$product->toArray()]);
		}
		else {
			return response()->json([
				'success'->false,
		        'message'=>'Product could not added'],500);
		}
    }

   // public function upadate(Request $request,$id){
   // 	$product=auth()->user()->products()->find($id);
   // 	if(!$product){
   // 		return response()->json([
			// 	'success'->false,
			//     'message'->'Product with id'.$id.'not found'],400);
   // 	}
   // 	$upadate=$product->fill($request->all())->save(); //fill if the object is not exist it will be return false
   // 	if($upadate){
   // 		return response()->json(['success'->true]);
   // 	}else{
   // 		return response()->json([
			// 	'success'->false,
			//     'message'->'Product could not be updated'],500);

   // 	}
   // }
   // public function destroy($id)
   //  {
   //      $product = auth()->user()->products()->find($id);
 
   //      if (!$product) {
   //          return response()->json([
   //              'success' => false,
   //              'message' => 'Product with id ' . $id . ' not found'
   //          ], 400);
   //      }
 
   //      if ($product->delete()) {
   //          return response()->json([
   //              'success' => true
   //          ]);
   //      } else {
   //          return response()->json([
   //              'success' => false,
   //              'message' => 'Product could not be deleted'
   //          ], 500);
   //      }
   //  }

}
