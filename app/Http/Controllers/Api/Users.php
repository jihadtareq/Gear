<?php

namespace App\Http\Controllers\Api;
use App\User;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use stdClass;
class Users extends Controller{

 public $successStatus = 200;

 public function register(Request $request)
    {
/*      return Response()->json([
    'hello' => 'asd'
], 201);*/
 $Validator=Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|string|min:11|max:11|unique:users',
            //'password' => 'required|string|min:6|confirmed',
            'last_name' => 'required|string|max:255',
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
     if($Validator->fails()){
      return response()->json(['error'=>$Validator->errors()],401);
     }

          $user= new User();
          $user->name =$request->name;
          $user->address=$request->address;
          $user->email=$request->email;
          $user->mobile=$request->mobile;
          $user->password=bcrypt($request->password);
          $user->last_name=$request->last_name;
          $user->id_number=$request->id_number;
          $user->type=$request->type;
          $user->address_lat= $request->address_lat;
          $user->address_long= $request->address_long;
          $user->api_token=str_random(60);
            $user->save();
     
       // $token=bin2hex(openssl_random_pseudo_bytes(30));
       // $success['token'] =$user->createToken('GearBox')->accessToken;
        // $success['token']= $user->api_token;
        // return response()->json(['success'=>$success],$this->successStatus);
      $obj = new stdClass();
      $obj->message= 'success';
      //$obj->token=$user->createToken('MyApp')->accessToken;
      $obj->token=$user->api_token;
      $obj->name=$user->name;
      return response()->json($obj);

    }
    public function apilogin(Request $request)
     {
        $rules=[
         'email'=>'required|email',
         'password'=>'required',

        ];

        $validate=validator::make(request()->all(),$rules);
        if($validate->fails())
        {
              
          return response(['status' => false,'messages'=>$validate->messages()]);

        }
        else{
            if(auth()->attempt(['email'=>request('email'),'password'=>request('password')]))
            {
              $user=auth()->User();
              $user->api_token = str_random(60);
              $user->save();
               return response(['status'=>true,'user'=>$user,'token'=>$user->api_token]);
            }
            else
            {
            return response(['status'=>false,'message'=>'Invalid Information Emali or Password']);
            }

        }
    }

public function logout()
{
    $user = Auth::user();
    $user->api_token = null;
    $user->save();
    return $this->outputJSON(null,"Successfully Logged Out"); 
}

}