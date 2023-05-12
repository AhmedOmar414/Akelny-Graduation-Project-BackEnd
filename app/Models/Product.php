<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    CONST FOUND = 1;
    CONST NOTFOUND = 0;
    protected $guarded = [];

    public function sub_category(){
        return $this->belongsTo(Subcategory::class,'sub_category_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function offer(){
        return $this->hasOne(ProductOffer::class,'product_id');
    }
    public function sizes(){
        return $this->hasMany(ProductSize::class,'product_id');
    }
    public function order_items(){
        return $this->hasMany(OrderItem::class,'product_id');
    }
}
