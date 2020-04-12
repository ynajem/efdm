<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Entity;
use App\User;
use Yajra\Datatables\Datatables;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('users.index', [
            'datatables' => Datatables::of(User::all())->make(true)
        ]);
    }

    public function create()
    {
        return view('users.create', [
            'entities' => Entity::pluck('label', 'id')
        ]);
    }

    public function datatable(Request $request)
    {
        // return Datatables::of(User::with('Entity'))->make(true);
        $users = User::all();

        return Datatables::of($users)
            ->editColumn('entity', function ($user) {
                return $user->entity->label;
            })
            ->make(true);
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

    // public function edit(User $user)
    // {
    //     return view('profiles.show', compact(['user']));
    // }

    // public function update(Request $request, User $user)
    // {
    //     $data = $request->all();
    //     // $data['password'] = Hash::make('1234');
    //     $user->update($data);
    //     return redirect()
    //         ->route('users.edit', $user->id)
    //         ->with('message', 'Votre profil a été mis a jour');
    // }
}
