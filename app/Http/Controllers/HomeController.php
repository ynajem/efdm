<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Shift;

class HomeController extends Controller

{
    public function index()
    {
        $entity = me()->entity;
        $start_time = getStartTime();

        $events = $entity->events->load('subobjet', 'user', 'objet')->take(5);
        $lines = $entity->lines->load('subobjet', 'user', 'objet')->take(5);
        $equipements = $entity->equipements->whereNull('end_time')->load('subobjet', 'user', 'objet')->take(5);
        $shift = $entity->shifts()->where('start_time', $start_time)->first();
        $shifts = Shift::where('start_time', $start_time)->get();
        return view('home.index', compact('events', 'lines', 'equipements', 'shifts', 'shift'));
    }
}
