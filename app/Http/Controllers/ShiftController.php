<?php

namespace App\Http\Controllers;

use App\Role;
use App\Shift;
// use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = entity()->shifts()->paginate(10);

        return view('shifts.index', compact('shifts'));
    }

    /* Calculate start and end time for each shift */
    public function getTimes($date, $shift)
    {
        $date = Carbon::parse($date);
        $shift_times = [
            1 => ['start' => '8 hours', 'end' => '13 hours 59 minutes'],
            2 => ['start' => '14 hours', 'end' => '20 hours 59 minutes'],
            3 => ['start' => '21 hours', 'end' => '31 hours 59 minutes']
        ];
        return [
            'start_time' => $date->copy()->add($shift_times[$shift]['start']),
            'end_time' => $date->copy()->add($shift_times[$shift]['end'])
        ];
    }


    public function create()
    {
        $supervisors = Role::firstWhere('name', 'supervisor')->users()->pluck('username', 'id');
        $chefSalles = Role::firstWhere('name', 'chef_salle')->users()->pluck('username', 'id');

        return view('shifts.create', compact('supervisors', 'chefSalles'));
    }

    public function store(Request $data)
    {
        $user = me();
        $times = $this->getTimes($data['date'], $data['shift']);
        $exist = Shift::where([
            ['start_time',  $times['start_time']],
            ['entity_id',  $user->entity_id],
        ]);

        if ($exist->first()) {
            return back()->with('error', 'Il y\'a une autre enregistremt pour cette vacation.');
        }

        $team = $user->team();
        $users = $this->getUsers($data, $team);

        if (empty($users)) {
            return back()->with('error', 'Veuillez vérifier les membres de cette équipe');
        }

        $shift = Shift::create([
            'start_time' => $times['start_time'],
            'end_time' => $times['end_time'],
            'shift' => $data['shift'],
            'entity_id' => $user->entity_id,
            'equipe' => $data['equipe'],
            'chefSalle' => $data['chefSalle'],
            'supervisor' => $data['supervisor'],
            'addedby' => $user->id
        ]);

        $shift->users()->sync($users);
        return redirect(route('shifts.index'));
    }

    public function show(Shift $shift)
    {
        if ($shift->entity_id != me()->entity_id) {
            abort(403);
        }

        $entity = me()->entity;
        $date = $shift->date;
        $shift_number = $shift->shift;

        $events = $entity->events()
            ->whereBetween('time', [$shift->start_time, $shift->end_time])->get();

        global $start;
        $start = $shift->start_time;

        $lines = $entity->lines()
            ->where('start_time', '<', $shift->end_time)
            ->where(function ($query) {
                global $start;
                $query->where('end_time', '>', $start)->orWhereNull('end_time');
            })->get()->load('subobjet', 'user', 'objet');

        $equipements = $entity->equipements()
            ->where('start_time', '<', $shift->end_time)
            ->where(function ($query) {
                global $start;
                $query->where('end_time', '>', $start)->orWhereNull('end_time');
            })->get()->load('subobjet', 'user', 'objet');

        $shifts = Shift::where('start_time', $shift->start_time)->get();

        return view('shifts.show', compact('events', 'lines', 'equipements', 'shifts', 'shift'));
    }

    public function edit(Shift $shift)
    {
        if ($shift->entity_id != me()->entity_id) {
            abort(403);
        }

        $supervisors = Role::firstWhere('name', 'supervisor')->users()->pluck('username', 'id');
        $chefSalles = Role::firstWhere('name', 'chef_salle')->users()->pluck('username', 'id');

        return view('shifts.edit', compact('shift', 'supervisors', 'chefSalles'));
    }

    public function update(Request $data, Shift $shift)
    {
        $user = me();

        if ($shift->entity_id != $user->entity_id) {
            abort(404);
        }

        $times = $this->getTimes($data['date'], $data['shift']);

        $team = $user->team();
        $users = $this->getUsers($data, $team);

        if (empty($users)) {
            return back()->with('error', 'Veuillez vérifier les membres de cette équipe');
        }

        $shift->update([
            'start_time' => $times['start_time'],
            'end_time' => $times['end_time'],
            'shift' => $data['shift'],
            'entity_id' => $user->entity->id,
            'equipe' => $data['equipe'],
            'chefSalle' => $data['chefSalle'],
            'supervisor' => $data['supervisor'],
            'addedby' => $user->id
        ]);

        $shift->users()->sync($users);
        return redirect(route('shifts.index'));
    }

    public function destroy(Shift $shift)
    {
        $shift->users()->detach();
        $shift->delete();
        return redirect(route('shifts.index'));
    }

    private function getUsers($data, $team)
    {
        $users = [];

        $chefSalle = $data['chefSalle'];
        $supervisor = $data['supervisor'];

        if ($team->keys()->contains($chefSalle)) {
            $users[$chefSalle] = ['role' => 'chefS'];
        }

        if ($team->keys()->contains($supervisor)) {
            $users[$supervisor] = ['role' => 'super'];
        }

        if ($data['chefEquipe']) {
            $users[$data['chefEquipe']] = ['role' => 'chefE'];
        }

        if (isset($data['esa'])) {
            foreach ($data['esa'] as $esa_id) {
                $users[$esa_id] = ['role' => 'esa'];
            }
        }

        if (isset($data['renf'])) {
            foreach ($data['renf'] as $esa_id) {
                $users[$esa_id] = ['role' => 'renf'];
            }
        }

        return $users;
    }
}
