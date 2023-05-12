<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function contact_us(){
        return view('website.pages.contact_us');
    }
    public function index(){
        $messages=Message::all();
        return view('admin.dashboard.pages.message.index',compact('messages'));

    }
    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required|string|max:100',
            'email'=>'required|string|max:100',
            'subject'=>'string',
            'message'=>'required',
        ]);
        if(!Auth::user()){
            return redirect()->route('client-login')->with('message','Login to send message');
        }
        else{
            $data['user_id']=Auth::user()->id;
            $Message=Message::create($data);
             Mail::to($Message->email)->send(new ContactMail($Message));
            return redirect()->route('/')->with('message','Message send success');

        }
    }


}
