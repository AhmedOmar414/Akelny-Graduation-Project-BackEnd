<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

//    public function sub_categories(){
//        return $this->belongsTo(Subcategory::class,'sub_category_id');
//    }
}
