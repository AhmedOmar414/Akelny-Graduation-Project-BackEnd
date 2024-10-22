<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantGallery extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }
}
