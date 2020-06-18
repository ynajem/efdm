<?php

namespace App\Http\Controllers;

use App\Entity;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreObjetRequest;
use App\Objet;
use App\Type;
use Illuminate\Support\Facades\Gate;

class ObjetController extends Controller
{
    public function index()
    {
        $type = request()->query('type', 1);
        if (Gate::allows('admin')) {
            $objets = Objet::where('type_id', $type)->with('entity', 'type')->get();
        } else {
            $objets = me()->entity->objets()->where('type_id', $type)->with('entity')->get();
        }
        return view('objets.index', compact('objets'));
    }

    public function create()
    {
        $entities = Entity::all()->pluck('label', 'id');
        $types = Type::all()->pluck('label', 'id');
        return view('objets.create', compact('entities', 'types'));
    }

    public function store(StoreObjetRequest $request)
    {
        // Add Entity if not admin
        if (Gate::denies('admin'))
            $request['entity_id'] = me()->entity->id;
        $objet = Objet::create($request->all());
        return redirect()->route('objets.index');
    }

    public function edit(Objet $objet)
    {
        return view('objets.edit', compact('objet'));
    }

    public function update(StoreObjetRequest $request, Objet $objet)
    {
        $objet->update($request->all());
        return redirect()->route('objets.index');
    }

    public function show(Objet $objet)
    {
        return view('objets.show', compact('objet'));
    }

    public function destroy(Objet $objet)
    {
        $objet->delete();
        return back();
    }
}
