<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $types = ['corr' => 'Corrective', 'prev' => 'Preventive', 'arch' => 'Archivage'];

    public function index()
    {
        return view('events.index', [
            'events' => Auth::user()->entity->events()->paginate(10)
        ]);
    }


    public function create()
    {
        $entity = auth()->user()->entity;
        $objets = $entity->objets->where('type_id', 1);
        return view('events.create', [
            'types' => $this->types,
            'objets' => $objets->pluck('name', 'id'),
            'subobjets' => $objets->first()->subobjets->pluck('name', 'id')
        ]);
    }


    public function store(Request $request)
    {
        $user = Auth::user();
        $data = request(['date', 'time', 'event', 'extra', 'subobjet_id', 'type']);
        $data['shift'] = getShift($request->time);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;

        Event::create($data);
        return redirect()->route('events.index');
    }

    public function show(Event $event)
    {
        return abort(404);
    }

    public function edit(Event $event)
    {
        $entity = auth()->user()->entity;
        $objets = $entity->objets->where('type_id', 1);
        $dobjet = $event->subobjet->objet->id;
        return view('events.edit', [
            'types' => $this->types,
            'objets' => $objets->pluck('name', 'id'),
            'subobjets' => $objets->find($dobjet)->subobjets->pluck('name', 'id'),
            'event' => $event
        ]);
    }


    public function update(Request $request, Event $event)
    {
        $user = Auth::user();
        $data = request(['date', 'time', 'event', 'extra', 'subobjet_id', 'type']);
        $data['shift'] = getShift($request->time);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;

        $event->update($data);
        return redirect()->route('events.index');
    }


    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }
}
