<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $types = ['corr' => 'Corrective', 'prev' => 'Preventive', 'arch' => 'Archivage'];

    public function index()
    {
        return view('events.index', [
            'events' => me()->entity->events()->paginate(20)
            // 'events' => Event::latest('date')->paginate(10) //display all events
        ]);
    }

    public function show()
    {
        return abort(404);
    }

    public function create()
    {
        $entity = me()->entity;
        $objets = $entity->objets()->where('type_id', 1);
        return view('events.create', [
            'types' => $this->types,
            'objets' => $objets->pluck('name', 'id'),
            'subobjets' => $objets->first()->subobjets->pluck('name', 'id')
        ]);
    }


    public function store(Request $request)
    {
        $data = $this->validator($request);
        $user = me();
        $data['shift'] = getShift($request->time);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;

        Event::create($data);
        return redirect()->route('events.index');
    }

   

    public function edit(Event $event)
    {
        $this->authorize('update', $event);
        $entity = me()->entity;
        $objets = $entity->objets()->where('type_id', 1);
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
        $data = $this->validator($request);
        $user = me();
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

    public function validator($request)
    {
        return $request->validate([
            'date' => ['required', 'date'],
            'time' => ['required', 'date_format:H:i'],
            'event' => ['required'],
            'type' => ['string'],
            'extra' => ['string','nullable'],
            'subobjet_id' => ['required','integer']
        ],
        [
            'event.required' => "Veuillez ajouter une intervention.",
            '*.required' => "S'il-vous-plaît remplissez tous les champs requis.",
        ]);     
    }
}
