<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use App\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    public function create()
    {
        return view('messages.create');
    }

    public function store(StoreMessageRequest $request)
    {
        $message = Message::create($request->all());
        return redirect()->route('messages.index');
    }

    public function edit(Message $message)
    {
        return view('messages.edit', compact('message'));
    }

    public function update(StoreMessageRequest $request, Message $message)
    {
        $message->update($request->all());
        return redirect()->route('messages.index');
    }

    public function show(Message $message)
    {
        return view('messages.show', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return back();
    }
}
