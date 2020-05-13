<?php

namespace App\Http\Controllers;

use App\Equipement;
use App\Event;
use App\Line;

class SupervisionController extends Controller
{
    public function events(Event $events)
    {
        return view('supervision.events', [
            'events' => $events->paginate(20)
        ]);
    }

    public function lines(Line $lines)
    {
        return view('supervision.lines', [
            'lines' => $lines->latest()->paginate(20)
        ]);
    }

    public function equipements(Equipement $equipements)
    {
        return view('supervision.equipements', [
            'equipements' => $equipements->latest()->paginate(20)
        ]);
    }
}
