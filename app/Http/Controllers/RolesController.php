<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
// use App\Http\Requests\UpdateRoleRequest;
use App\Ability;
use App\Role;

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
        return view('roles.create', compact('abilities'));
    }

    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->all());
        $role->abilities()->sync($request->abilities);
        return redirect()->route('roles.index');
    }

    public function edit(Role $role)
    {
        $abilities = Ability::all()->pluck('name', 'id');
        $role->load('abilities');
        return view('roles.edit', compact('abilities', 'role'));
    }

    public function update(StoreRoleRequest $request, Role $role)
    {
        $role->update($request->all());
        $role->abilities()->sync($request->abilities);
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
