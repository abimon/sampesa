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
        $message = Message::where('recepient_id',Auth()->user()->id)->orderBy('created_at','desc')->first();
        $sender = $message->sender;
        $messages = Message::where([['recepient_id',Auth()->user()->id],['sender_id',$message->sender_id]])->orWhere([['sender_id',Auth()->user()->id],['recepient_id',$message->sender_id]])->get();
        foreach($messages as $message){
            $message->isRead = true;
            $message->update();
        }
        $chats = [];
        foreach($users as $user){
           $chat= Message::where('recepient_id',$user->id)->orWhere('sender_id',$user->id)->orderBy('created_at','desc')->first();
           if($chat!=null){
            array_push($chats,['message'=>$chat->message,'user_id'=>$user->id]);
           }
           
        }
        return view('dashboard.chat', compact('users', 'messages','sender','chats'));
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
    public function show($id)
    {
        $users = User::where('id','!=',Auth()->user()->id)->get();
        $sender = User::findOrFail($id);
        
        $chats = [];
        foreach($users as $user){
           $chat= Message::where('recepient_id',$user->id)->orWhere('sender_id',$user->id)->orderBy('created_at','desc')->first();
           if($chat!=null){
            array_push($chats,['message'=>$chat->message,'user_id'=>$user->id]);
           }
           
        }
        $messages = Message::where([['recepient_id',Auth()->user()->id],['sender_id',$id]])->orWhere([['sender_id',Auth()->user()->id],['recepient_id',$id]])->get();
        foreach($messages as $message){
            $message->isRead = true;
            $message->update();
        }
        return view('dashboard.chat', compact('users', 'messages','sender','chats'));
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
