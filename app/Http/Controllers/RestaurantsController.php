<?php

namespace App\Http\Controllers;

use App\Http\Requests\Restaurant\Auth\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RestaurantsController extends Controller
{
    public function index(){
        $users=User::where('role','res')->orderBy('id','ASC')->paginate(10);
        return view('backend.restaurants.index')->with('users',$users);
    }
    public function create()
    {
        return view('backend.restaurants.create');
    }

    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('backend.restaurants.edit')->with('user',$user);
    }

    public function update(Request $request,$id){
        $user=User::findOrFail($id);
        $this->validate($request,
            [
                'name'=>'string|required|max:30',
                'mobile'=>'required|max:30',
                'open_time'=>'required|max:30',
                'close_time'=>'required|max:30',
                'address'=>'required|max:30',
                'email'=>'string|required',
                'status'=>'required|in:active,inactive',
                'photo'=>'nullable|string',
            ]);
        // dd($request->all());
        $data=$request->all();
        $data['role'] = 'res';
        // dd($data);

        $status=$user->fill($data)->save();
        if($status){
            request()->session()->flash('success','Successfully updated');
        }
        else{
            request()->session()->flash('error','Error occured while updating');
        }
        return redirect()->route('restaurants.index');
    }


    public function store(RegisterRequest $request){
        $data = $request->all();
        $data['role'] = 'res';
        $data['password'] = Hash::make($request->password);
        $check = User::create($data);
        if($check){
            request()->session()->flash('success','Successfully registered');
            return redirect()->route('restaurants.index');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }

    public function destroy($id)
    {
        $delete=User::findorFail($id);
        $status=$delete->delete();
        if($status){
            request()->session()->flash('success','User Successfully deleted');
        }
        else{
            request()->session()->flash('error','There is an error while deleting users');
        }
        return redirect()->route('restaurants.index');
    }
}
