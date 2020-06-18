<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubobjetRequest;
use App\Objet;
use App\Subobjet;

class SubobjetController extends Controller
{
    public function index(Objet $objet)
    {
        $subobjets = $objet->subobjets->all();
        return view('subobjets.index', compact('subobjets', 'objet'));
    }

    public function create(Objet $objet)
    {
        return view('subobjets.create', compact('objet'));
    }

    public function store(StoreSubobjetRequest $request, Objet $objet)
    {
        $subobjet = $objet->subobjets()->create($request->all());
        return redirect()->route('objets.subobjets.index', $objet);
    }

    public function edit(Objet $objet, Subobjet $subobjet)
    {
        // return $subobjet;
        return view('subobjets.edit', compact('subobjet', 'objet'));
    }

    public function update(StoreSubobjetRequest $request, Objet $objet, Subobjet $subobjet)
    {
        $subobjet->update($request->all());
        return redirect()->route('objets.subobjets.index', $objet);
    }

    public function show(Subobjet $subobjet)
    {
        return view('subobjets.show', compact('subobjet'));
    }

    public function destroy(Objet $objet, Subobjet $subobjet)
    {
        $subobjet->delete();
        return back();
    }
}
