<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{ 
	use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='favorites';
    protected $fillable = [
        'items', 
    ];

	 public function user()
    {
        return $this->belongsTo(User::class);
    }
}
