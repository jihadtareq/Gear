<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class upload extends Controller
{
    public function upload(){
    	$this->validate(request(),['file.*'=>'required|image|mimes:jpg,jpeg,png,gif']);
    	$files= request()->file('file');
        foreach ($files as $file) {

              $name     =$file->getClientOriginalName();
              $ext      =$file->getClientOriginalExtension();
              $size     =$file->getSize();
              $mim      =$file->getMimeType();
              $realPath = $file->getRealPath();

             $file->move(public_path('uploads'),'image_'.time().'.'.$ext);
                }
    	

    	return back();
    }

   /* public function storage (){

      return date('Y-m-d h:m:s',Storage::LastModified('textfile.txt'));
      return request('text');
    }*/
}
