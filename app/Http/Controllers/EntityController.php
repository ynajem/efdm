<?php

namespace App\Http\Controllers;

use App\Entity;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEntityRequest;
// use App\Http\Requests\UpdateEntityRequest;
use Illuminate\Support\Facades\Gate;

class EntityController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('entity_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (Gate::denies('update_users')) abort(403);

        $entities = Entity::all();

        return view('entities.index', compact('entities'));
    }

    public function create()
    {
        // abort_if(Gate::denies('entity_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('entities.create');
    }

    public function store(StoreEntityRequest $request)
    {
        $entity = Entity::create($request->all());
        return redirect()->route('entities.index');
    }

    public function edit(Entity $entity)
    {
        // abort_if(Gate::denies('entity_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('entities.edit', compact('entity'));
    }

    public function update(StoreEntityRequest $request, Entity $entity)
    {
        $entity->update($request->all());
        return redirect()->route('entities.index');
    }
}
