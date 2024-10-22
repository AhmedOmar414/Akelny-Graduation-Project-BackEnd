<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    //user types
    CONST ADMIN = 0;
    CONST CLIENT = 1;
    CONST RESTAURANT = 2;

    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'user_type_id',
        'photo',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class,'restaurant_id');
    }
}
