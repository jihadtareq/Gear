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
    protected $fillable = [
     'name_shop','mobile','area','address','worktime','Wash', 'kindofcartofix','description',
    ];

    public function admin_id()
    {
    	return $this->hasOne('App\admin','id','admin_id');
    }
    
}
