<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Mechanic extends Authenticatable
{ 
	use Notifiable;
	 /*
	 *
	 *
	 */
    protected $table='mechanics';
    protected $fillable = [
     'name_shop','mobile','address_lat','address_long','worktime_from','worktime_to','Wash', 'kindofcartofix','description',
    ];

    public function admin_id()
    {
    	return $this->hasOne('App\admin','id','admin_id');
    }
    
}
