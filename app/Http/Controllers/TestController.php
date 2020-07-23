<?php

namespace App\Http\Controllers;

use App\Line;
use App\Subobjet;
use Carbon\Carbon;
use Collator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class TestController extends Controller
{
    public function command(Request $request)
    {

        $json = json_encode($request->all());

        $process = new Process(["python3", "hello.py", $json]);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return json_decode($process->getOutput(), true);
    }

    public function factors()
    {
        // return Line::all()->whereBetween('start_time', ['2020-05-01', '2020-06-30'])->groupBy('subobjet_id')->map->sum('duration');
        // $lines = Line::select('subobjet_id', DB::raw('sum(duration) as sum'))->where('objet_id', 28)->groupBy('subobjet_id');
        // ->leftJoin('subobjets', 'subobjets.id', '=', 'lines.subobjet_id')
        // ->with('subobjet')->get();
        $items = Subobjet::where('objet_id', 29)->get();
        // $items = Subobjet::whereObjetId(28)->get();
        // $items = Subobjet::whereObjetId(28)->get()->map(function ($subobjet) {
        //     return $subobjet->lines;
        // });
        // return $items;
        $start = '2020-05-01';
        $end =  '2020-06-30';
        $start_time = Carbon::parse($start);
        $end_time = Carbon::parse($end);
        $total_min = $start_time->diffInMinutes($end_time);

        // return $items;

        $data = [];
        foreach ($items as $item) {
            $stop = Line::where('subobjet_id', $item->id)
                ->whereBetween('start_time', [$start, $end])
                ->sum('duration');

            $data[] = [
                'duration' => $stop . ' min',
                'ratio' => round(($total_min - $stop) / $total_min * 100, 2) . ' %',
                'objet' => $item->name
            ];
        }
        return $data;
    }
}
