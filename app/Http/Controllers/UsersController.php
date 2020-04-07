<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Entity;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);;
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create', [
            'entities' => Entity::pluck('label', 'id')
        ]);
    }

    public function store(Request $data)
    {
        $user = User::create([
            'username' => $data['username'],
            'entity_id' => $data['entity_id'],
            'email' => $data['username'] . '@onda.ma',
            'password' => Hash::make('1234'),
        ]);

        return redirect()->route('users.index');
    }
}
