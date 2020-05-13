<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Entity;
use App\User;
use Yajra\Datatables\Datatables;


class UsersController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'datatables' => Datatables::of(User::all())->make(true)
        ]);
    }

    public function create()
    {
        return view('users.create', [
            'entities' => Entity::pluck('label', 'id')
        ]);
    }

    public function datatable(Request $request)
    {
        if (!empty($request->from_date)) {
            $data = User::whereBetween('created_at', array($request->from_date, $request->to_date))->get();
        } else {
            $data = User::all();
        }

        return Datatables::of($data)
            ->addColumn('entity', function ($user) {
                return $user->entity->label;
            })
            ->addColumn('fullname', function ($user) {
                return $user->fullname();
            })->tojson();
    }

    public function store(Request $data)
    {
        $user = User::create([
            'username' => $data['username'],
            'entity_id' => $data['entity_id'],
            'email' => $data['username'] . '@onda.ma',
            'password' => Hash::make('1234'),
        ]);

        return redirect()->route('users.index');
    }
}
