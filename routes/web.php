<?php

use Illuminate\Support\Facades\Input;
use App\Mechanic;
use App\PetrolStation;
use App\Agance;
use App\SparePart;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('{user}/test', 'HomeController@pageone');
/////////////////////////////Spare_Part route//////////////////////////////////////////////////////
Route::get('index5','SparePartsController@searchh5');
Route::any ( '/search5', function () {
    $q = Input::get ( 'q' );
$user = SparePart::where ( 'storename', 'LIKE', '%' . $q . '%' )->orWhere ( 'sparepart', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'Sparepart.search5' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'Sparepart.search5' )->withMessage ( 'No Details found. Try to search again !' );
} );
Route::get('insertsparepart','SparePartsController@insertformsparepart');
Route::post('insert/sparepart', 'SparePartsController@storesparepart') ;
Route::get('all/sparepart', 'SparePartsController@all_sparepart');
Route::get('edit-recordssparepart','SparePartsController@indexallsparepart');
Route::get('editsparepart/{id}','SparePartsController@showsparepart');
Route::post('editsparepart/{id}','SparePartsController@editsparepart');
// Route::delete('del/car/{id}', 'AganceController@delete1') ;
Route::get('delete-recordssparepart','SparePartsController@indexdeletesparepart');
Route::get('deletesparepart/{id}','SparePartsController@destroysparepart');
Route::get('/profilesparepart','ProfileController@profileOwners');
/////////////////////////////Spare_Part route//////////////////////////////////////////////////////




/////////////////////////////Agance route//////////////////////////////////////////////////////
Route::get('index4','AganceController@searchh4');
Route::any ( '/search4', function () {
    $q = Input::get ( 'q' );
$user = Agance::where ( 'kindofcarhave', 'LIKE', '%' . $q . '%' )->orWhere ( 'price', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'Agance.search4' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'Agance.search4' )->withMessage ( 'No Details found. Try to search again !' );
} );
Route::get('insertcar','AganceController@insertform1');
Route::post('insert/car', 'AganceController@store') ;
Route::get('all/car', 'AganceController@all_car');
Route::get('edit-records1','AganceController@indexallcar');
Route::get('edit1/{id}','AganceController@show1');
Route::post('edit1/{id}','AganceController@edit1');
// Route::delete('del/car/{id}', 'AganceController@delete1') ;
Route::get('delete-records1','AganceController@indexdelete1');
Route::get('delete1/{id}','AganceController@destroy1');
/////////////////////////////Agance route//////////////////////////////////////////////////////



Route::get('index3','PetrolStationController@searchh3');
Route::any ( '/search3', function () {
    $q = Input::get ( 'q' );
$user = PetrolStation::where ( 'location', 'LIKE', '%' . $q . '%' )->orWhere ( 'nameofpetrolstation', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'search3' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'search3' )->withMessage ( 'No Details found. Try to search again !' );
} );
Route::get('index2','MechanicController@searchh2');
Route::any ( '/search2', function () {
    $q = Input::get ( 'q' );
$user = Mechanic::where ( 'area', 'LIKE', '%' . $q . '%' )->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'search2' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'search2' )->withMessage ( 'No Details found. Try to search again !' );
} );

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('auth/logout', 'Auth\LoginController@getLogout');

/*Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'Categories'],function(){
Route::get('availableCategories', 'AllCategoriesController@index');
Route::get('Mechanic', 'MechanicController@index');
Route::get('SpareParts', 'SparePartsController@index');
Route::get('PetrolStation', 'PetrolStationController@index');
Route::get('Agance', 'AganceController@index');
});*/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
 
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');
       //register owner
Route::get('reg/owner', 'Auth\RegisterController@showOwnerRegisterForm');
//Route::post('register/owner', 'Auth\RegisterController@register');
    

        // Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//Admin
Route::get('login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::post('login/admin', 'Auth\LoginController@adminLogin');
Route::get('logout/admin',function(){
	auth()->guard('admin')->logout();
	return redirect('/');
});

Route::get('admin/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('admin/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('admin/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('password.reset');
Route::post('admin/password/reset', 'Auth\AdminResetPasswordController@reset')->name('password.update');
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//owner
/*Route::post('/register/owner', 'Auth\RegisterController@createOwner')->name('register');
Route::get('/register/owner', 'Auth\RegisterController@showOwnerRegisterForm');
// Password Reset Routes...
Route::get('password/reset', 'agancesowner\ForgotPasswordController@showLinkRequestForm')->name('agancesowner.password.request');
Route::post('password/email', 'agancesowner\ForgotPasswordController@sendResetLinkEmail')->name('agancesowner.password.email');
Route::get('password/reset/{token}', 'agancesowner\ResetPasswordController@showResetForm')->name('agancesowner.password.reset');
Route::post('password/reset', 'agancesowner\ResetPasswordController@reset')->name('agancesowner.password.update');
Route::get('logout/agancesowner',function(){
  auth()->guard('agancesowner')->logout();
  return redirect('/');
});*/
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin')->middleware('auth:admin');
Route::view('/agancesowner', 'agancesowner')->middleware('auth:agancesowner');
/////////////////////////////////////////////////////////////////////////
//mechanics routes
/////////////////////////////////////////////////////////////////////////
Route::group(['middleware'=>'auth:admin'],function(){
Route::get('insert','MechanicController@insertform');
Route::post('insert/mechanic', 'MechanicController@inset_mechanic') ;
// Route::delete('del/mechanic/{id}', 'MechanicController@delete') ;
Route::get('edit-records','MechanicController@indexallmechanic');
Route::get('edit/{id}','MechanicController@show');
Route::post('edit/{id}','MechanicController@edit');
Route::get('delete-records','MechanicController@indexdelete');
Route::get('delete/{id}','MechanicController@destroy');
});
Route::get('all/mechanic', 'MechanicController@all_mechanic');
//////////////////////////////////////////////////////////////////////////
//petrolstation routes
/////////////////////////////////////////////////////////////////////
Route::group(['middleware'=>'auth:admin'],function(){
Route::get('insertpetrolstation','PetrolStationController@insertform');
Route::post('insert/petrolstation', 'PetrolStationController@insert_petrolstation') ;
// Route::delete('del/petrolstation/{id}', 'PetrolStationController@delete') ;
Route::get('edit-recordspetrolstation','PetrolStationController@indexallpetrolstation');
Route::get('editpetrolstation/{id}','PetrolStationController@show');
Route::post('editpetrolstation/{id}','PetrolStationController@edit');
Route::get('delete-recordspetrolstation','PetrolStationController@indexdelete');
Route::get('deletepetrolstation/{id}','PetrolStationController@destroy');
});
Route::get('all/petrolstation', 'PetrolStationController@all_petrolstation');
///////////////////////////////////////////////////////////////////////////////////
//segments

Route::get('test/rehab', function (Illuminate\Support\Facades\Request $request)
{  return $request::segments();
});
//uploads routes
Route::post('upload/file','upload@upload');


Route::get('send/message',function(){
	//App\Jobs\SendMailJob
    $job= (new \App\Jobs\SendMailJob)->delay(\Carbon\Carbon::now()->addSeconds(5)); //handle processes which happen in background
    //can increase time 
    dispatch($job);
  return 'test send mailtrap';
});
Route::get('/map','Auth\RegisterController@getmap');
//>>>>>>>>>>>>>>>>>
Route::get('cart', 'FavoriteController@cart');
Route::get('addtocart/{id}', 'FavoriteController@addtocartsparepart');
Route::get('addtocart/{id}', 'FavoriteController@addtocartagance');
Route::patch('updatecart', 'FavoriteController@update');
Route::delete('removefromcart', 'FavoriteController@remove');