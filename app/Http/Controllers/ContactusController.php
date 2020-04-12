<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Message::latest()->paginate(10);
        return view('contactus.index', compact('messages'));
    }

    public function create()
    {
        return view('contactus.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'objet' => 'required',
            'message' => 'required'
        ]);

        $data['author'] = auth()->user()->username;

        Message::create($data);

        return redirect()
            ->route('contactus.create')
            ->with('message', 'Votre message a été envoyé.');
    }
}
