<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $user=User::where('id',Auth::user()->id)->first();
        return view('website.pages.profile.index',compact('user'));

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
        $user=User::where('id',Auth::user()->id)->first();
        return view('website.pages.profile.edit',compact('user'));

    }


    public function update(Request $request, $id)
    {
        $data =$request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg,gif',
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'mobile' => 'required',

        ]);
        $user = User::findOrFail($id);

        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/users/'), $image);
            $data['photo'] = $image;
        }
        $user->update($data);
        if(!$user->update($data)){
            return redirect()->back()->with('message', 'There was a problem with add user.');
        } else {
            return redirect()->back()->with('success', 'Profile Updates Successfully!');
        }
    }


    public function destroy($id)
    {
        //
    }
}
