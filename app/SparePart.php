<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{  protected $table = 'spareparts';
   protected $fillable =['sparepart','price','description','storename','filename','mime',
    'original_filename',
    ];

    // public function owners(){
    // 	return $this->belongsToMany(User::class);

    // }


public function owner()
{
    return $this->belongsTo('App\User');

}    
}
