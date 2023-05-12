<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $admin=User::where('id',Auth::user()->id)->first();
        return view('admin.dashboard.pages.profile.index',compact('admin'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $admin=User::where('id',Auth::user()->id)->first();
        return view('admin.dashboard.pages.profile.edit',compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $data =$request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg,gif',
            'name' => 'required|string|max:100',
            'mobile' => 'required|string|max:100',
            'email' => 'required',
        ]);
        $admin = User::findOrFail($id);

        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/users/'), $image);
            $data['photo'] = $image;
        }
        $admin->update($data);
        if(!$admin->update($data)){
            return redirect()->back()->with('message', 'There was a problem with add admin.');
        } else {
            return redirect()->route('admin_profile.index')->with('success', 'Profile Updates Successfully!');
        }
    }

    public function destroy($id)
    {
        //
    }
}
