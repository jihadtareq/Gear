<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agance extends Model
{
    //
    protected $table='agances';
    protected $fillable =['kindofcarhave','price','description','agancename','filename','mime',
    'original_filename',
    ];
    public function owner(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function favourites()
    {
        return $this->hasMany(Favorite::class);
    }

}
