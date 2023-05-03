<?php

namespace App\Http\Controllers\Restaurant\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders= Order::all();
        return view('restaurant.dashboard.pages.order.index',compact("orders"));

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        $order=Order::find($id);
        $order->delete();

        return redirect()->back()->with(['success' =>'Order deleted successfully']);
    }
}
