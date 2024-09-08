<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    function allChats() {
        return view('pages.chat');
    }

    public function sendMessage(Request $request)
    {
        $message = new Message();
        $message->from_user_id = auth()->id();
        $message->to_user_id = $request->to_user_id;
        $message->message = $request->message;
        
        if ($request->has('book_title')) {
            $message->book_title = $request->book_title;
            $message->book_subtitle = $request->book_subtitle;
            $message->book_image = $request->book_image;
        }

        $message->save();
    }
}
