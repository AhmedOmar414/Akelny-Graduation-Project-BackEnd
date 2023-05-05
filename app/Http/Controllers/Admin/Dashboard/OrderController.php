<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $restaurants= Restaurant::all();
        return view('admin.dashboard.pages.order.index',compact('restaurants'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
        $restaurant=Restaurant::find($id);
        $orders=Order::where('restaurant_id',$restaurant->id)->get();
        return view('admin.dashboard.pages.order.show',compact('restaurant','orders'));

    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
