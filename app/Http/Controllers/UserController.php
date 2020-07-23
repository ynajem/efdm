<?php

namespace App\Http\Controllers;

use App\User;
use App\Entity;
use App\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // $users = User::latest()->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all()->pluck('name', 'id');
        $entities = Entity::all()->pluck('label', 'id')->prepend('Select Entity');
        return view('users.create', compact('roles', 'entities'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        $user->load('roles', 'entity');
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::all()->pluck('name', 'id');
        $entities = Entity::all()->pluck('label', 'id');
        $user->load('roles', 'entity');
        return view('users.edit', compact('roles', 'entities', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        // return $request->validated();
        $user->update($request->validated());
        $user->roles()->sync($request->input('roles', []));
        return redirect()->route('users.index');
    }

    public function import()
    {
        return Excel::toCollection(new UsersImport, resource_path("csv/users.xlsx"));
        return redirect('/')->with('success', 'All good!');
    }
}
