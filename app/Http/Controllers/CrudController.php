<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCrudRequest;
use App\Crud;

class CrudController extends Controller
{
    public function index()
    {
        $cruds = Crud::all();
        return view('cruds.index', compact('cruds'));
    }

    public function create()
    {
        $cruds = Crud::where('parent_id', 1)->pluck('title', 'id');
        return view('cruds.create', compact('cruds'));
    }

    public function store(StoreCrudRequest $request)
    {
        // return $request;
        $crud = Crud::create($request->all());
        return redirect()->route('cruds.index');
    }

    public function edit(Crud $crud)
    {
        return view('cruds.edit', compact('crud'));
    }

    public function update(StoreCrudRequest $request, Crud $crud)
    {
        $crud->update($request->all());
        return redirect()->route('cruds.index');
    }

    public function show(Crud $crud)
    {
        return view('cruds.show', compact('crud'));
    }

    public function destroy(Crud $crud)
    {
        $crud->delete();
        return back();
    }
}
