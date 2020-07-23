<?php

namespace App\Http\Controllers;

use App\Equipement;
use App\Http\Requests\StoreEquipementRequest;
use App\Http\Requests\UpdateEquipementRequest;
use Illuminate\Support\Carbon;

class EquipementController extends Controller
{
    private $types = ['corr' => 'Corrective', 'prev' => 'Preventive'];

    public function index()
    {
        $equipements = entity()->equipements();
        if (request('status') == 'live') $equipements = $equipements->whereNull('end_time');
        $equipements = $equipements->paginate(10);

        return view('equipements.index', compact('equipements'));
    }

    public function create()
    {
        $objets = entity()->objets->where('type_id', 3); /* Select Equipements */
        $subobjets = $objets->first()->subobjets->pluck('name', 'id'); /* Select the first element for select input */
        $objets = $objets->pluck('name', 'id');

        return view('equipements.create', compact('objets', 'subobjets'));
    }

    public function store(StoreEquipementRequest $request)
    {
        $user = me();
        $data = $request->only(['comment', 'subobjet_id', 'type', 'objet_id', 'equipement']);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;
        $data['start_time'] = "{$request['startdate']} {$request['starttime']}";
        Equipement::create($data);

        return redirect()->route('equipements.index');
    }

    public function show(Equipement $equipement)
    {
        $objets = entity()->objets->where('type_id', 3)->pluck('name', 'id');
        $subobjets = $equipement->objet->subobjets->pluck('name', 'id');

        return view('equipements.close', compact('equipement', 'objets', 'subobjets'));
    }


    public function edit(Equipement $equipement)
    {
        $objets = entity()->objets->where('type_id', 3)->pluck('name', 'id');
        $subobjets = $equipement->objet->subobjets->pluck('name', 'id');

        return view('equipements.edit', compact('equipement', 'objets', 'subobjets'));
    }

    public function update(UpdateEquipementRequest $request, equipement $equipement)
    {
        $user = me();
        $data = $request->only(['comment', 'subobjet_id', 'type', 'objet_id', 'equipement']);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;
        $data['start_time'] = Carbon::parse("{$request->startdate} {$request->starttime}");

        if (isset($request->endtime) and isset($request->enddate)) {
            $data['end_time'] = Carbon::parse("{$request->enddate} {$request->endtime}");
            $data['duration'] = $data['start_time']->diffInMinutes($data['end_time']);
            $data['status'] = 'closed';
        }

        $equipement->update($data);
        return redirect()->route('equipements.index');
    }


    public function destroy(Equipement $equipement)
    {
        $equipement->delete();
        return redirect()->route('equipements.index');
    }
}
