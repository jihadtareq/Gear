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
        'sparepart_id','car_id','user_id',
    ];

	 public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sparepart()
    {
        return $this->belongsTo(SparePart::class);
    }
    public function car()
    {
        return $this->belongsTo(Agance::class);
    }

}
