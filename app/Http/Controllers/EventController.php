<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $types = ['corr' => 'Corrective', 'prev' => 'Preventive', 'arch' => 'Archivage'];

    public function index(Request $request)
    {
        $events = entity()->events();
        if ($request->has('objet')) {
            $events->where('objet_id', $request->objet);
        }
        if ($request->has('subobjet')) {
            $events->where('subobjet_id', $request->subobjet);
        }
        return view('events.index', [
            'events' => $events->paginate(20)
        ]);
    }

    public function show()
    {
        return abort(404);
    }

    public function create()
    {
        $entity = me()->entity;
        $objets = $entity->objets()->where('type_id', 1)->get();
        $types = $this->types;
        $subobjets = $objets->first()->subobjets()->pluck('name', 'id');
        $objets = $objets->pluck('name', 'id');
        // return $objets;

        return view('events.create', compact('types', 'objets', 'subobjets'));
    }


    public function store(Request $request)
    {
        $data = $this->validator($request);
        // return $data;
        $user = me();
        $data['time'] = Carbon::parse("{$data['event_date']} {$data['event_time']}");
        $data['shift'] = getShift($request->event_time);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;

        Event::create($data);
        return redirect()->route('events.index');
    }



    public function edit(Event $event)
    {
        // $this->authorize('update', $event);
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
        $data['shift'] = getShift($request->event_time);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;
        // $data['time'] = Carbon::parse("{$data['event_date']} {$data['event_time']}");
        $data['time'] = "{$data['event_date']} {$data['event_time']}";
        // return $data['time'];

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
        return $request->validate(
            [
                'event_date' => ['required', 'date_format:Y-m-d'],
                'event_time' => ['required', 'date_format:H:i'],
                'event' => ['required'],
                'type' => ['string'],
                'extra' => ['string', 'nullable'],
                'subobjet_id' => ['required', 'integer'],
                'objet_id' => ['required', 'integer']
            ],
            [
                'event.required' => "Veuillez ajouter une intervention.",
                '*.required' => "S'il-vous-plaît remplissez tous les champs requis.",
            ]
        );
    }
}
