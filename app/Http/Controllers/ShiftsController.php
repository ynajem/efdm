<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;
use App\User;
use Form;

class ShiftsController extends Controller
{
    public $user;
    public $entity_id;
    public function __construct()
    {
        $this->middleware('auth');
        // $this->user = auth()->user();
        // return $this->user;
        // $this->entity_id = $this->user->entity_id; 
        Form::macro('options', function ($name, $options, $default = null) {
            return Form::select($name, $options, $default, ['placeholder' => '', 'class' => 'custom-select']);
        });
    }

    public $periods = array("08" => "De 08 h à 14 h", "14" => "De 14 h à 21 h", "21" => "De 21 h à 08 h");
    public $equips = array("A" => 'A', "B" => 'B', "C" => 'C', "D" => 'D', "E" => 'E');


    public function index()
    {
        $user = auth()->user(); /* Get the current logged user */

        $shifts = Shift::where('entity_id', $user->entity_id)
            ->latest('date')
            ->latest('shift')
            ->paginate(20);

        return view('shifts.index', [
            'periods' => $this->periods,
            'shifts' => $shifts,
            'users' => $user->team(),
        ]);
    }

    public function show(Shift $shift)
    {
        return view('shifts.show', ['shift' => $shift]);
    }

    public function create()
    {
        $user = auth()->user();
        $users = $user->entity->users->pluck('username', 'username');
        $supervisors = User::where('title', 'super')->pluck('username', 'username');
        $chefSalles = User::where('title', 'salle')->pluck('username', 'username');

        return view('shifts.create', [
            'equips' => $this->equips,
            'shifts' => $this->periods,
            'users' => $users,
            'supervisors' => $supervisors,
            'chefSalles' => $chefSalles
        ]);
    }

    public function store()
    {
        $user = auth()->user();
        $extra = [
            'user_id' => $user->id,
            'entity_id' => $user->entity->id
        ];
        Shift::create(array_merge(request()->all(), $extra));
        return redirect('shifts');
    }

    public function edit(Shift $shift)
    {
        $user = auth()->user();
        $users = $user->entity->users->pluck('username', 'username');
        $supervisors = User::where('title', 'super')->pluck('username', 'username');
        $chefSalles = User::where('title', 'salle')->pluck('username', 'username');

        return view('shifts.edit', [
            'equips' => $this->equips,
            'shifts' => $this->periods,
            'shift' => $shift,
            'users' => $users,
            'supervisors' => $supervisors,
            'chefSalles' => $chefSalles
        ]);
    }

    public function update(Shift $shift)
    {
        // $extra = [
        //     'addedBy' => 'y.najem',
        //     'entity' => 'Detection'
        // ];
        $shift->update(array_merge(request()->all()));
        return redirect('shifts');
    }

    public function destroy(Shift $shift)
    {
        $shift->delete();
        return redirect('/shifts');
    }
}
