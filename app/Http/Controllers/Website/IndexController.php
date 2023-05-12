<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Offer;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Restaurant;
use App\Models\RestaurantGallery;
use App\Models\Review;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

   public function main(){
       $categories=Category::paginate(15);
       $offers=Offer::paginate(10);
       //trendingProducts
       $trendingProducts = Product::join('order_items', 'products.id', '=', 'order_items.product_id')
           ->select('products.*', DB::raw('COUNT(order_items.id) as order_count'))
           ->groupBy('products.id','products.name','products.photo','products.description','products.quantity','products.price','products.status','products.category_id','products.sub_category_id','products.created_at','products.updated_at')
           ->orderBy('order_count', 'desc')
           ->get();
       $trendingProducts=$trendingProducts->take(8);

       //mostPopulars
       $mostPopulars = Restaurant::join('reviews', 'restaurants.id', '=', 'reviews.restaurant_id')
           ->select('restaurants.*', DB::raw('AVG(reviews.stars) as avg_rating'))
           ->groupBy('restaurants.id', 'restaurants.restaurant_name','restaurants.logo','restaurants.address','restaurants.lat','restaurants.lng','restaurants.tax_registration_number','restaurants.open_at','restaurants.close_at','restaurants.status','restaurants.user_id','restaurants.created_at','restaurants.updated_at')
           ->orderBy('avg_rating', 'desc')
           ->get();
       $totalCountMostPopulars  = $mostPopulars->count();
       $mostPopulars = $mostPopulars->take(8);

       //mostSales
           $mostSales = Restaurant::has('orders')->withCount('orders')->orderByDesc('orders_count')->get()->take(3);
           $totalCountMostSales  = $mostSales->count();

       return view('main',compact('categories','offers','mostPopulars','totalCountMostPopulars','trendingProducts','mostSales','totalCountMostSales'));
   }
   public function menu($id){
       $user_id = Auth::user()->id;
       $cartItems = Cart::where('user_id', $user_id)->with('product')->get();

     $data = Restaurant::with('categories.sub_categories.products')->find($id);
         return view('website.pages.menu',compact('data','cartItems'));

   }
   public function offer_page(){
       $allOffers = Restaurant::has('offers')->withCount('offers')->orderByDesc('offers_count')->get();
       return view('website.pages.offer_page',compact('allOffers'));
   }
   public function trending(){
       $trendingProducts = Product::join('order_items', 'products.id', '=', 'order_items.product_id')
           ->select('products.*', DB::raw('COUNT(order_items.id) as order_count'))
           ->groupBy('products.id','products.name','products.photo','products.description','products.quantity','products.price','products.status','products.category_id','products.sub_category_id','products.created_at','products.updated_at')
           ->orderBy('order_count', 'desc')
           ->get();
       return view('website.pages.trending_page',compact('trendingProducts'));
   }
   public function most_popular(){
       $mostPopulars = Restaurant::join('reviews', 'restaurants.id', '=', 'reviews.restaurant_id')
           ->select('restaurants.*', DB::raw('AVG(reviews.stars) as avg_rating'))
           ->groupBy('restaurants.id', 'restaurants.restaurant_name','restaurants.logo','restaurants.address','restaurants.lat','restaurants.lng','restaurants.tax_registration_number','restaurants.open_at','restaurants.close_at','restaurants.status','restaurants.user_id','restaurants.created_at','restaurants.updated_at')
           ->orderBy('avg_rating', 'desc')
           ->get();

return view('website.pages.most_popular',compact('mostPopulars'));
   }
   public function most_sale(){
       $mostSales = Restaurant::has('orders')->withCount('orders')->orderByDesc('orders_count')->get();
       return view('website.pages.most_sale',compact('mostSales'));
   }
   public function all_restaurants(){
       $restaurants = Restaurant::orderBy('id', 'asc')->get();
       return view('website.pages.all_restaurants',compact('restaurants'));
   }

   public function getprice($size,$product_id){
       $ProductSize = ProductSize::where('size', $size && 'product_id', $product_id)->get();
       $price=$ProductSize->price;
       return response()->json($price);
   }


}
