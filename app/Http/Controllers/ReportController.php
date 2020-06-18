<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Line;
use App\Objet;
use Yajra\DataTables\DataTables;

class ReportController extends Controller
{
    public function datatable(Objet $objet, Request $request)
    {
        $lines = $objet->subobjets->map->lines->flatten();
        if (!empty($request->from_date)) {
            $data = $lines->whereBetween('startdate', array($request->from_date, $request->to_date));
        } else {
            $data = $lines;
        }

        return Datatables::of($data)
            ->addColumn('objet', function ($line) {
                return $line->subobjet->name;
            })
            ->tojson();
    }
}
