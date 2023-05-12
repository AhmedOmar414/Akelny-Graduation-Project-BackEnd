<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteRestaurantController extends Controller
{

    public function add_to_my_favorite_restaurants(Request $request)
    {
        $restaurant_id = $request->input('restaurant_id');
        if (Auth::check()) {
            $restaurant_check = Restaurant::where('id', $restaurant_id)->first();
            $favorite_check = Favorite::where('restaurant_id', $restaurant_check->id)->first();
            if (!$favorite_check) {
                $favoriteItem = new Favorite();
                $favoriteItem->restaurant_id = $restaurant_id;
                $favoriteItem->user_id = Auth::user()->id;
                $favoriteItem->save();
                return response()->json(['message' => "restaurant add to favorite"]);
            }
            else{
                return response()->json(['message' => "restaurant already exist"]);

            }

        } else {
            return response()->json(['message' => "Login to continue"]);
        }

    }
    public function get_my_favorite_restaurants()
    {
        $user_id = Auth::user()->id;
        $favorite_restaurants = Favorite::where('user_id', $user_id)->with('restaurant') // eager load the related restaurant
        ->get();

        return view('website.pages.favorite.favorite_restaurant',compact('favorite_restaurants'));
    }
    public function delete($id){
        $favorite = Favorite::find($id);
        $favorite->delete();
        return response()->json([
            'success' => true,
            'message' => 'Restaurant removed from favorites successfully'
        ]);
    }

}
