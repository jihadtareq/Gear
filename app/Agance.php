<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agance extends Model
{
    //
    protected $fillable =['kindofcarhave','price','description','filename','mime',
    'original_filename',
    ];
    /* public function owners(){
    	return $this->belongsToMany(User::class);
    }
*/
    public function owner(){
    	return $this->belongsTo('App/User');
    }
}
