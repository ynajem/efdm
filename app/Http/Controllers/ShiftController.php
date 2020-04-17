<?php

namespace App\Http\Controllers;

use App\Shift;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShiftController extends Controller
{
    public $periods = array(1 => "De 08 h à 14 h", 2 => "De 14 h à 21 h", 3 => "De 21 h à 08 h");
    public $equips = array("A" => 'A', "B" => 'B', "C" => 'C', "D" => 'D', "E" => 'E');

    public function index()
    {
        $user = auth()->user();
        return view('shifts.index', [
            'period' => $this->periods,
            'shifts' => $user->entity->shifts()->paginate(10),
        ]);
    }


    public function create()
    {
        $user = auth()->user();

        return view('shifts.create', [
            'equips' => $this->equips,
            'shifts' => $this->periods,
            'users' => $user->team(),
            'user' => $user,
            'supervisors' => User::where('title', 'Superviseur')->pluck('username', 'id'),
            'chefSalles' => User::where('title', 'Chef de salle')->pluck('username', 'id')
        ]);
    }

    public function store(Request $data)
    {
        $user = auth()->user();

        $exist = Shift::where([
            ['date',  $data['date']],
            ['shift',  $data['shift']],
            ['entity_id',  $user->entity->id],
        ]);

        if ($exist->first()) {
            return back()->with('message', 'Il y\'a une autre enregistremt pour cette vacation.');
        }

        $shift = Shift::create([
            'date' => $data['date'],
            'shift' => $data['shift'],
            'entity_id' => $user->entity->id,
            'equipe' => $data['equipe'],
            'chefSalle' => $data['chefSalle'],
            'supervisor' => $data['supervisor'],
            'addedby' => $user->id
        ]);

        $team = $user->team();
        $users = $this->getUsers($data, $team);
        $shift->users()->sync($users);
        return redirect(route('shifts.index'));
    }

    public function show(Shift $shift)
    {
        $shifts = Shift::where('date', $shift->date)->where('shift', $shift->shift)->get();
        return view('shifts.show', [
            'shift' => $shift,
            'period' => $this->periods,
            'shifts' => $shifts
        ]);
    }

    public function edit(Shift $shift)
    {
        $user = auth()->user();

        return view('shifts.edit', [
            'equips' => $this->equips,
            'shifts' => $this->periods,
            'shift' => $shift,
            'users' => $user->team(),
            'chef' => $shift->users()->where('role', 'chefE')->first()->id,
            'supervisors' => User::where('title', 'Superviseur')->pluck('username', 'id'),
            'chefSalles' => User::where('title', 'Chef de salle')->pluck('username', 'id')
        ]);
    }

    public function update(Request $data, Shift $shift)
    {
        $user = Auth::user();

        if ($shift->entity_id != $user->entity_id) {
            abort(404);
        }

        $shift->update([
            'date' => $data['date'],
            'shift' => $data['shift'],
            'entity_id' => $user->entity->id,
            'equipe' => $data['equipe'],
            'chefSalle' => $data['chefSalle'],
            'supervisor' => $data['supervisor'],
            'addedby' => $user->id
        ]);

        $team = $user->team();
        $users = $this->getUsers($data, $team);
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

        $chefS = $data['chefSalle'];
        $super = $data['supervisor'];

        if (array_key_exists($chefS, $team)) {
            $users[$chefS] = ['role' => 'chefS'];
        }

        if (array_key_exists($super, $team)) {
            $users[$super] = ['role' => 'super'];
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
