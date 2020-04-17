<?php

namespace App\Http\Controllers;

use App\Line;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class LineController extends Controller
{
    private $types = ['corr' => 'Corrective', 'prev' => 'Preventive'];

    public function index()
    {
        $lines = Auth::user()->entity->lines();
        if ($status = request('status')) $lines = $lines->where('status', $status);
        return view('lines.index', [
            'lines' => $lines->paginate(10)
        ]);
    }


    public function create()
    {
        $entity = auth()->user()->entity;
        $objets = $entity->objets->where('type_id', 2);
        return view('lines.create', [
            'types' => $this->types,
            'objets' => $objets->pluck('name', 'id'),
            'subobjets' => $objets->first()->subobjets->pluck('name', 'id'),
            'status' => 'ready'
        ]);
    }


    public function store(Request $request)
    {
        $user = Auth::user();
        $data = request(['startdate', 'starttime', 'comment', 'subobjet_id', 'type']);
        $data['shift'] = getShift($request->starttime);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;

        Line::create($data);
        return redirect()->route('lines.index');
    }

    public function show(Line $line)
    {
        $entity = auth()->user()->entity;
        $objets = $entity->objets->where('type_id', 2);
        $dobjet = $line->subobjet->objet->id;
        return view('lines.close', [
            'types' => $this->types,
            'objets' => $objets->pluck('name', 'id'),
            'subobjets' => $objets->find($dobjet)->subobjets->pluck('name', 'id'),
            'line' => $line,
            'status' => 'closed'
        ]);
    }


    public function edit(Line $line)
    {
        $entity = auth()->user()->entity;
        $objets = $entity->objets->where('type_id', 2);
        $dobjet = $line->subobjet->objet->id;
        return view('lines.edit', [
            'types' => $this->types,
            'objets' => $objets->pluck('name', 'id'),
            'subobjets' => $objets->find($dobjet)->subobjets->pluck('name', 'id'),
            'line' => $line,
            'status' => $line->status
        ]);
    }

    public function update(Request $request, Line $line)
    {
        $user = Auth::user();
        $data = request(['startdate', 'starttime', 'comment', 'subobjet_id', 'type', 'endtime', 'enddate']);
        $data['shift'] = getShift($request->starttime);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;

        if (isset($request->endtime) and isset($request->enddate)) {
            $start = Carbon::parse("{$request->startdate} {$request->starttime}");
            $finish = Carbon::parse("{$request->enddate} {$request->endtime}");
            $data['duration'] = $start->diffInMinutes($finish);
            $data['status'] = 'closed';
        }

        $line->update($data);
        return redirect()->route('lines.index');
    }


    public function destroy(Line $line)
    {
        $line->delete();
        return redirect()->route('lines.index');
    }
}
