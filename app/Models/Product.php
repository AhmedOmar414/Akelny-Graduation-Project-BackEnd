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
}
