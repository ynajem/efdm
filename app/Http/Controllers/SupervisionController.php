<?php

namespace App\Http\Controllers;

use App\Equipement;
use App\Event;
use App\Line;

class SupervisionController extends Controller
{
    public function events(Event $events)
    {
        $events = $events->latest('time')->paginate(20);
        return view('supervision.events', compact('events'));
    }

    public function lines(Line $lines)
    {
        $lines = $lines->latest('start_time')->paginate(20);
        return view('supervision.lines', compact('lines'));
    }

    public function equipements(Equipement $equipements)
    {
        $equipements = $equipements->latest('start_time')->paginate(20);
        return view('supervision.equipements', compact('equipements'));
    }
}
