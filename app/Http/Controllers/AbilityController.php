<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAbilityRequest;
use App\Ability;

class AbilityController extends Controller
{
    public function index()
    {
        $abilities = Ability::all();
        return view('abilities.index', compact('abilities'));
    }

    public function create()
    {
        return view('abilities.create');
    }

    public function store(StoreAbilityRequest $request)
    {
        $ability = Ability::create($request->all());
        return redirect()->route('abilities.index');
    }

    public function edit(Ability $ability)
    {
        return view('abilities.edit', compact('ability'));
    }

    public function update(StoreAbilityRequest $request, Ability $ability)
    {
        $ability->update($request->all());
        return redirect()->route('abilities.index');
    }

    public function show(Ability $ability)
    {
        return view('abilities.show', compact('ability'));
    }

    public function destroy(Ability $ability)
    {
        $ability->delete();
        return back();
    }
}
