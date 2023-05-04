<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clients= User::where('user_type_id',User::CLIENT)->get();
        return view('admin.dashboard.pages.client.index',compact("clients"));

    }

    public function create()
    {
        return view('admin.dashboard.pages.client.create');

    }


    public function store(Request $request)
    {
        $data=$request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg,gif',
            'name' => 'required|string|max:100',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:5|max:25',
        ]);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/users/'), $image);
            $data['photo']  = $image;
        }
        $data['password'] = bcrypt($request->password);
        $data['user_type_id'] =User::CLIENT;
       $user=User::create($data);
        if(!$user->save()){
            return redirect()->back()->with('message', 'There was a problem with add client.');
        } else {
            return redirect()->route('client.index')->with('success', 'Client Created Successfully!');
        }
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $client=User::find($id);
        return view('admin.dashboard.pages.client.edit',compact('client'));

    }


    public function update(Request $request, $id)
    {
        $data =$request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg,gif',
            'name' => 'required|string|max:100',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
        ]);
        $user = User::findOrFail($id);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/users/'), $image);
            $data['photo'] = $image;
        }
        $data['user_type_id'] =User::CLIENT;
        $user->update($data);

        if(!$user->update($data)){
            return redirect()->back()->with('message', 'There was a problem with add user.');
        } else {
            return redirect()->route('client.index')->with('success', 'client Updates Successfully!');
        }
    }


    public function destroy(Request $request)
    {

        $id = $request->id;
        $user=User::find($id);
        $path = 'images/users/' . $user->photo;
        if (file_exists($path)) {
            unlink($path);
        }
        Storage::delete($user->photo);
        $user->delete();
        return redirect()->back()->with(['success' =>'client deleted successfully']);
    }
}
