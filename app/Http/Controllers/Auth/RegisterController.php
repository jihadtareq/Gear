<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

//use Illuminate\Foundation\Validation\ValidatesRequests;
class RegisterController extends Controller
{   
    //use ValidatesRequests;
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:owner');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
     public function showAdminRegisterForm()
    {
        return view('auth.registerAdmin', ['url' => 'admin']);
    }

    public function showOwnerRegisterForm()
    {
        return view('auth.registerOwner', ['url' => 'owner']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|integer|min:25|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'last_name' => 'required|string|max:255',
        ]);
    }

   /* protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'address' => $request['address'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('/login/admin');
    }*/
    
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {    //abort_unless(\Gate::allows('user_create'), 403);
        return User::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'last_name' => $data['last_name'],
            'address_lat' => $data['address_lat'],
            'address_long' => $data['address_long'],
            'id_number' => $data['id_number'],
            'type'=>$data['type'],
            'password' => Hash::make($data['password']),
            
        ]);
    }

 /*protected function ownervalidator(array $data1)
    {
        return Validator::make($data1, [
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|integer|min:25|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

     protected function createOwner(array $data1)
    {
           return User::create([
            'first_name' => $data1['first_name'],
            'middle_name' => $data1['middle_name'],
            'last_name' => $data1['last_name'],
            'email' => $data1['email'],
            'mobile' => $data1['mobile'],
            'address' => $data1['address'],
            'area' => $data1['area'],
            'id_number' => $data1['id_number'],
            'password' => Hash::make($data1['password']),
            'type'=>$data1['type'],
        ]); 

        return redirect()->intended('/login/owner');
    }*/

public function getmap(){
    return view('test1');

}
}
