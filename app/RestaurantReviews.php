<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantReviews extends Model
{
    protected $table = 'res_reviews';
    protected $fillable = ['user_id','res_id','rate','review','status'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function restaurant(){
        return $this->belongsTo(User::class,'res_id');
    }

    public static function getAllReview(){
        return RestaurantReviews::with('user','restaurant')->paginate(10);
    }
}
