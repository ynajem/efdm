<?php

namespace App\Http\Controllers;

use App\Equipement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class EquipementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $types = ['corr' => 'Corrective', 'prev' => 'Preventive'];

    public function index()
    {
        $equipements = Auth::user()->entity->equipements();
        if ($status = request('status')) $equipements = $equipements->where('status', $status);
        return view('equipements.index', [
            'equipements' => $equipements->paginate(10)
        ]);
    }


    public function create()
    {
        $entity = auth()->user()->entity;
        $objets = $entity->objets->where('type_id', 3);
        return view('equipements.create', [
            'types' => $this->types,
            'objets' => $objets->pluck('name', 'id'),
            'subobjets' => $objets->first()->subobjets->pluck('name', 'id'),
            'status' => 'ready'
        ]);
    }


    public function store(Request $request)
    {
        $user = Auth::user();
        $data = request(['startdate', 'starttime', 'comment', 'subobjet_id', 'equipement']);
        $data['shift'] = getShift($request->starttime);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;

        equipement::create($data);
        return redirect()->route('equipements.index');
    }

    public function show(Equipement $equipement)
    {
        $entity = auth()->user()->entity;
        $objets = $entity->objets->where('type_id', 3);
        $dobjet = $equipement->subobjet->objet->id;
        return view('equipements.close', [
            'types' => $this->types,
            'objets' => $objets->pluck('name', 'id'),
            'subobjets' => $objets->find($dobjet)->subobjets->pluck('name', 'id'),
            'equipement' => $equipement,
            'status' => 'closed'
        ]);
    }


    public function edit(Equipement $equipement)
    {
        $entity = auth()->user()->entity;
        $objets = $entity->objets->where('type_id', 3);
        $dobjet = $equipement->subobjet->objet->id;
        return view('equipements.edit', [
            'types' => $this->types,
            'objets' => $objets->pluck('name', 'id'),
            'subobjets' => $objets->find($dobjet)->subobjets->pluck('name', 'id'),
            'equipement' => $equipement,
            'status' => $equipement->status
        ]);
    }

    public function update(Request $request, equipement $equipement)
    {
        $user = Auth::user();
        $data = request(['startdate', 'starttime', 'comment', 'subobjet_id', 'equipement', 'endtime', 'enddate']);
        $data['shift'] = getShift($request->starttime);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;

        if (isset($request->endtime) and isset($request->enddate)) {
            $start = Carbon::parse("{$request->startdate} {$request->starttime}");
            $finish = Carbon::parse("{$request->enddate} {$request->endtime}");
            $data['duration'] = $start->diffInMinutes($finish);
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
