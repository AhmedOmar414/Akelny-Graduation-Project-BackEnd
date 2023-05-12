<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\ProductOffer;
use App\Models\ProductSize;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add_to_cart(Request $request){

if ($request->product_size==null){
    $product=Product::where('id',$request->product_id)->first();
    $product_price=$product->price;


}else{
    $Productsize=ProductSize::where('id',$request->product_size)->first();
    $product_price= $Productsize->price;
}

if ($Productoffer=ProductOffer::where('product_id',$request->product_id)->first()){
    $product_price=$product_price-($product_price*$Productoffer->percentage/100);
}

        if (Auth::check()){

                $data['user_id']=Auth::user()->id;
                $data['product_id']=$request->product_id;
                $data['restaurant_id']=$request->restaurant_id;
                $data['quantity']=1;
                $data['price']=$product_price;
                $data['product_offer_id']=2;
                $data['product_size_id']=$request->product_size;
                Cart::create($data);
                return response()->json(['message' => "product added to cart"]);

        }else{
         return response()->json(['message' => "Login to continue"]);
        }

    }

}
