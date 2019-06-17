<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class PetrolStation extends Authenticatable
{
     use Notifiable;
	 /*
	 *
	 *
	 */
    protected $table='petrol_stations';
    protected $fillable = [
     'address_lat','address_long','nameofpetrolstation',];

     public function adminid()
    {
    	return $this->hasOne('App\admin','id','admin_id');
    }
}
