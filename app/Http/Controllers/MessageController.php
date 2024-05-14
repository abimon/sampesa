<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('id','!=',Auth()->user()->id)->get();
        $messages = Message::all();
        $chats = [];
        foreach($users as $user){
           $chat= Message::where('recepient_id',$user->id)->orWhere('sender_id',$user->id)->orderBy('created_at','desc')->first();
           if($chat!=null){
            array_push($chats,['message'=>$chat->message,'user_id'=>$user->id]);
           }
           
        }
        // return $chats;
        return view('dashboard.chat', compact('users', 'messages','chats'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        Message::create([
            'sender_id'=>Auth()->user()->id,
            'recepient_id'=>request()->userId,
            'message'=>request()->message,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
