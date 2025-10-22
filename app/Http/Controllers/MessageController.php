<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $user = session('user');
        $messages = Message::where('sender_id', $user->id)
            ->orWhere('receiver_id', $user->id)
            ->with(['sender', 'receiver'])
            ->latest()
            ->get();

        return view('dashboard.message', compact('messages'));
    }

    public function create()
    {
        $user = User::find(session('user')->id);
        $contacts = $user->contacts ?? [];

        return view('dashboard.new-message', compact('contacts'));
    }

    public function store(MessageRequest $request)
    {
        $user = session('user');

        Message::create([
            'sender_id' => $user->id,
            'receiver_id' => $request->input('receiver_id'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('dashboard.messages')->with('success', 'Message sent successfully.');
    }

//    public function show(string $id)
//    {
//        $user = session('user');
//        $message = Message::with(['sender', 'receiver'])->findOrFail($id);
//
//        if ($message->user_id !== $user->id && $message->receiver_id !== $user->id) {
//            abort(403);
//        }
//
//        return view('dashboard.message-show', compact('message'));
//    }

}
