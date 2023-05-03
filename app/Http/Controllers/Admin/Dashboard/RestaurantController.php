<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants= Restaurant::all();
        return view('admin.dashboard.pages.restaurant.index',compact("restaurants"));

    }

    public function create()
    {
        return view('admin.dashboard.pages.restaurant.create');

    }


    public function store(Request $request)
    {
        $userdata=$request->validate([
            'name' => 'required|string|max:100',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:5|max:25',
        ]);
        $userdata['user_type_id']=User::RESTAURANT;
        $userdata['password'] = bcrypt($request->password);

        $data=$request->validate([
            'logo' => 'image|mimes:jpg,png,jpeg,gif',
            'restaurant_name' => 'required|string|max:100',
            'address' => 'required|string|max:100',
            'lat' => 'required',
            'lng' => 'required',
            'tax_registration_number' => 'required|numeric',
            'open_at' => 'required',
            'close_at' => 'required',
        ]);
        $user=User::create($userdata);
        if($request->file('logo')) {
            $file = $request->file('logo');
            $image = date('logo') . $file->getClientOriginalName();
            $file->move(public_path('images/restaurants/'), $image);
            $data['logo']  = $image;
        }

        $data['user_id']=$user->id;
        $restaurant=Restaurant::create($data);

        if(!$restaurant->save()){
            return redirect()->back()->with('message', 'There was a problem with add restaurant.');
        } else {
            return redirect()->route('restaurant.index')->with('success', 'Restaurant Created Successfully!');
        }
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $restaurant=Restaurant::find($id);
        return view('admin.dashboard.pages.restaurant.edit',compact('restaurant'));

    }


    public function update(Request $request,$id)
    {


        $data =$request->validate([
            'logo' => 'image|mimes:jpg,png,jpeg,gif',
            'restaurant_name' => 'required|string|max:100',
            'address' => 'required|string|max:100',
            'lat' => 'required',
            'lng' => 'required',
            'tax_registration_number' => 'required|numeric',
            'open_at' => 'required',
            'close_at' => 'required',
            'user_id' => 'string',
            'status' => 'required',
        ]);
        $restaurant = Restaurant::findOrFail($id);

        if($request->file('logo')) {
            $file = $request->file('logo');
            $image = date('logo') . $file->getClientOriginalName();
            $file->move(public_path('images/restaurants/'), $image);
            $data['logo'] = $image;
        }
        $restaurant->update($data);
        if(!$restaurant->update($data)){
            return redirect()->back()->with('message', 'There was a problem with add restaurant.');
        } else {
            return redirect()->route('restaurant.index')->with('success', 'Restaurant Updates Successfully!');
        }
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        $restaurant= Restaurant::find($id);
        $path = 'images/restaurants/' . $restaurant->photo;
        if (file_exists($path)) {
            unlink($path);
        }
        Storage::delete($restaurant->photo);
        $restaurant->delete();
        return redirect()->back()->with(['success' =>'Restaurant deleted successfully']);
    }
}
