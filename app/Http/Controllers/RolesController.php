<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
// use App\Http\Requests\UpdateRoleRequest;
use App\Ability;
use App\Role;
use App\User;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $abilities = Ability::all()->pluck('name', 'id');
        $users = User::all()->pluck('username', 'id');
        return view('roles.create', compact('abilities', 'users'));
    }

    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->all());
        $role->abilities()->sync($request->abilities);
        $role->users()->sync($request->users);
        return redirect()->route('roles.index');
    }

    public function edit(Role $role)
    {
        $abilities = Ability::all()->pluck('name', 'id');
        $users = User::all()->pluck('username', 'id');
        $role->load('abilities', 'users');
        return view('roles.edit', compact('abilities', 'role', 'users'));
    }

    public function update(StoreRoleRequest $request, Role $role)
    {
        $role->update($request->all());
        $role->abilities()->sync($request->abilities);
        $role->users()->sync($request->users);
        return redirect()->route('roles.index');
    }

    public function show(Role $role)
    {
        $role->load('abilities');
        return view('roles.show', compact('role'));
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return back();
    }
}
