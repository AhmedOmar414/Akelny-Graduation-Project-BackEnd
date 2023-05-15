<?php

namespace App;

use App\Models\Product;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','role','photo','status','provider','provider_id','address','open_time','close_time','mobile',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders(){
        return $this->hasMany('App\Models\Order');
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function resOrders(){
        return $this->hasMany(Product::class,'res_id');
    }
}
