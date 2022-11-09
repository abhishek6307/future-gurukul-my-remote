<?php

namespace App\Http\Controllers\Backend;
use Auth;
use App\Models\Chatsystem;
use App\Models\Adminchatsystem;
use Carbon\Carbon;
use DB;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $users = Auth::user();
        $adminchats = Adminchatsystem::where('sender','1')->orderBy('created_at','ASC')->get();
        $userchats = Chatsystem::where('sender','2')->orderBy('created_at','ASC')->get();



   

                         
   
        return view('frontend.chats.index',compact('adminchats','userchats', 'users'));
       
    }

    public function store(Request $request)
    {
        Chatsystem::insert([
       
            'message' => $request->message,
            'sender' => $request->sender,
            'receiver' => $request->receiver,
            'notification' => $request->notification,
            'status' => $request->status,
            'created_at' => Carbon::now(),
       
           ]);
         
        return redirect()->back();
    }


    public function adminindex()
    {
        
        $chats = Adminchatsystem::latest()->get();
         return view('backend.chats.index',compact('chats'));
    }




    public function adminstore(Request $request)
    {
        Adminchatsystem::insert([
       
            'message' => $request->message,
            'sender' => $request->sender,
            'receiver' => $request->receiver,
            'notification' => $request->notification,
            'status' => $request->status,
            'created_at' => Carbon::now(),
           ]);
         
        return redirect()->back()->withwith('success', "Hooray, things are awesome!");
    }
  
}
