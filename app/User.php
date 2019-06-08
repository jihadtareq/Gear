<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
    protected $fillable = [
        'name', 'email', 'password','mobile','address','last_name','address_lat',
        'address_long','id_number','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','api_token',
    ];
/*
    public function favorites(){
        return $this->hasMany(favorite::class);
    }
    public function spareparts()
    {
        return $this->belongsToMany(SparePart::class);
    }
*/
    // public function spareparts_owner(){
    //     return $this->belongsto(spareparts_owner::class);
    // }





public function spareparts()
{
    return $this->hasMany(SparePart::class);

}
public function showrooms()
{
    return $this->hasMany(Agance::class);

}
public function favorite()
{
    return $this->hasMany(Favorite::class);

}














}
