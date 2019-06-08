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
    protected $fillable = [
     'location','nameofpetrolstation',];

     public function adminid()
    {
    	return $this->hasOne('App\admin','id','admin_id');
    }
}
