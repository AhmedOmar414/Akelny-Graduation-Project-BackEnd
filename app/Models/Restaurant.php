<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    CONST OPEN = 1;
    CONST CLOSE = 0;
    protected $guarded = [];

    public function categories(){
        return $this->hasMany(Category::class,'restaurant_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function restaurant_gallery(){
        return $this->hasMany(RestaurantGallery::class,'restaurant_id');
    }
    public function orders(){
        return $this->hasMany(Order::class,'restaurant_id');
    }
    public function reviews(){
        return $this->hasMany(Review::class,'restaurant_id');
    }
    public function offers(){
        return $this->hasMany(Offer::class,'restaurant_id');
    }

}
