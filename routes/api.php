<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::post('login2', 'Api\UsersController@login2');
Route::middleware('auth:api')->get('/user',function(Request $request){  //we need middleware when he islogin
return $request->user();
});
//No Auth-------------------------------------------------//
//Route::get('/showall','Api\Profile@showall');
Route::get('/showMechanics','Api\Profile@showMechanics');
Route::get('/showPetrolStation','Api\Profile@showPetrolStation');
Route::get('/showallsparepart','Api\Profile@showallsparepart');
Route::get('/showallcars','Api\Profile@showallcars');
//With Auth-------------------------------------------------//
Route::middleware('auth:api')->group( function(){
	Route::get('/profile','Api\Profile@profileOwners');
	Route::post('/add/sparepart','Api\Profile@storeSparepart');
  Route::post('/add/cars','Api\Profile@storeAgance');
  Route::post('/make/favorite','Api\Profile@makeFavorite');
  Route::get('/delete/favorite','Api\Profile@deleteFavorite');
  Route::get('/show/favorite','Api\Profile@showFavorite');

});
Route::group(['namespace'=>'Api'],function(){
    //Route::group(['middleware'=>'auth:api']);
  Route::post('login','Users@apilogin');
  //Route::post('login2', 'Users@login2');
  Route::post('register','Users@register');
  //Route::get('register','Users@register');
  Route::post('Store','items@store');
  Route::get('logout', 'Users@logout')->middleware('auth:api');
  //Route::get('profile/{id}','Profile@profileOwners');
});
