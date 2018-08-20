<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Events\ChatEvent;

class ChatController extends Controller
{
public function __construct(){
    $this->middleware('auth');
}

    public function getChat(){
        return view('chat');
    }

    public function send(Request $request){
        $user = User::find(Auth::id());
        $this->saveToSession($request);
        event(new ChatEvent($request->message,$user));
    }

    public function saveToSession(Request $request){
        session()->put('chat',$request->chat);
    }
    public function getOldMessage(){
        return session('chat');
    }
    public function deleteSession(){
        session()->forget('chat');
    }
}
