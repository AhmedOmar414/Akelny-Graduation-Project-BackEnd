<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\FavoriteProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteProductController extends Controller
{
    public function add_to_my_favorite_products(Request $request)
    {
        $product_id = $request->input('product_id');
        $restaurant_id = $request->input('restaurant_id');
        if (Auth::check()) {
            $product_check = Product::where('id', $product_id)->first();
            $favorite_check = FavoriteProduct::where('product_id', $product_check->id)->first();
            if (!$favorite_check) {
                $favoriteItem = new FavoriteProduct();
                $favoriteItem->product_id = $product_id;
                $favoriteItem->restaurant_id = $restaurant_id;
                $favoriteItem->user_id = Auth::user()->id;
                $favoriteItem->save();
                return response()->json(['message' => "product add to favorite"]);
            }
            else{
                return response()->json(['message' => "product already exist"]);

            }

        } else {
            return response()->json(['message' => "Login to continue"]);
        }

    }
    public function get_my_favorite_products()
    {
        $user_id = Auth::user()->id;
        $favorite_products = FavoriteProduct::where('user_id', $user_id)->with('product') // eager load the related restaurant
        ->get();

        return view('website.pages.favorite.favorite_product',compact('favorite_products'));
    }
    public function delete($id){
        $favorite = FavoriteProduct::find($id);
        $favorite->delete();
        return response()->json([
            'success' => true,
            'message' => 'product removed from favorites successfully'
        ]);
    }


}
