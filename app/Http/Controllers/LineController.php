<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLineRequest;
use App\Http\Requests\UpdateLineRequest;
use Illuminate\Support\Carbon;
use App\Line;

class LineController extends Controller
{
    public function index()
    {
        $lines = entity()->lines();
        if (request('status') == 'live') $lines = $lines->whereNull('end_time');
        $lines = $lines->paginate(10);

        return view('lines.index', compact('lines'));
    }


    public function create()
    {
        $objets = entity()->objets->where('type_id', 2); /* Select Lines */
        $subobjets = $objets->first()->subobjets->pluck('name', 'id'); /* Select the first element for select input */
        $objets = $objets->pluck('name', 'id');

        return view('lines.create', compact('objets', 'subobjets'));
    }


    public function store(StoreLineRequest $request)
    {
        $user = me();
        $data = $request->only(['comment', 'subobjet_id', 'type', 'objet_id']);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;
        $data['start_time'] = "{$request['startdate']} {$request['starttime']}";
        Line::create($data);

        return redirect()->route('lines.index');
    }

    public function show(Line $line)
    {
        $objets = entity()->objets->where('type_id', 2)->pluck('name', 'id');
        $subobjets = $line->objet->subobjets->pluck('name', 'id');

        return view('lines.close', compact('line', 'objets', 'subobjets'));
    }


    public function edit(Line $line)
    {
        $objets = entity()->objets->where('type_id', 2)->pluck('name', 'id');
        $subobjets = $line->objet->subobjets->pluck('name', 'id');

        return view('lines.edit', compact('line', 'objets', 'subobjets'));
    }

    public function update(UpdateLineRequest $request, Line $line)
    {
        $user = me();
        $data = $request->only(['comment', 'subobjet_id', 'type', 'objet_id']);
        $data['user_id'] = $user->id;
        $data['entity_id'] = $user->entity_id;
        $data['start_time'] = Carbon::parse("{$request->startdate} {$request->starttime}");

        if (isset($request->endtime) and isset($request->enddate)) {
            $data['end_time'] = Carbon::parse("{$request->enddate} {$request->endtime}");
            $data['duration'] = $data['start_time']->diffInMinutes($data['end_time']);
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
