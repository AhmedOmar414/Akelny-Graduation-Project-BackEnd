<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    CONST FOUND = 1;
    CONST NOTFOUND = 0;
    protected $guarded = [];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }
    public function sub_categories(){
        return $this->hasMany(Subcategory::class,'category_id');
    }
    public function products(){
        return $this->hasMany(Product::class,'category_id');
    }

}
