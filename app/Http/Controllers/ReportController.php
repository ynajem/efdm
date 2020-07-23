<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Line;
use App\Objet;
use Yajra\DataTables\DataTables;

class ReportController extends Controller
{
    public function index()
    {
        $lines = me()->entity->objets()->where('type_id', 2)->get();
        return view('reports.index', compact('lines'));
    }

    public function show($report)
    {
        $objet = Objet::findorfail($report);
        return view('reports.show', compact('objet'));
    }

    public function datatable(Objet $objet, Request $request)
    {
        $lines = $objet->subobjets->map->lines->flatten();
        if (!empty($request->from_date)) {
            $data = $lines->whereBetween('start_time', array($request->from_date, $request->to_date));
        } else {
            $data = $lines;
        }

        return Datatables::of($data)
            ->addColumn('objet', function ($line) {
                return $line->subobjet->name;
            })
            ->addColumn('startdate', function ($line) {
                return $line->start_time->format('d-m-Y');
            })
            ->addColumn('starttime', function ($line) {
                return $line->start_time->format('H:i');
            })
            ->addColumn('enddate', function ($line) {
                return ($line->end_time) ? $line->end_time->format('d-m-Y') : '----';
            })
            ->addColumn('endtime', function ($line) {
                return ($line->end_time) ? $line->end_time->format('H:i') : '----';
            })
            ->tojson();
    }
}
