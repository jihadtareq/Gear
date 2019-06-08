<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SparePart;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profileOwners(){
    	$id=Auth::id();
    	$type=Auth::user()->type;
    	$owner=User::where('id',$id);
    	if($type == 2)
    	{
    		
    	$q=$owner->with(['spareparts'])->orderBy('created_at')->get();
    	return response()->json($q);
    	}
    	elseif($type == 1)
    	{
    	return ($owner->with(['agances'])->orderBy('created_at'));


    	}
    	else
    	{
    		return redirect()->back();
    	}
        return view('test');
  }
}
