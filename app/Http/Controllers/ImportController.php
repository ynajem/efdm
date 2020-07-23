<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImportRequest;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    public function create()
    {
        $db_tables = DB::select('SHOW TABLES');
        $db_tables = array_map('current', $db_tables);
        return view('import.create', compact('db_tables'));
    }

    public function parse(ImportRequest $request)
    {
        $db_fields = DB::getSchemaBuilder()->getColumnListing($request->db_table);
        $path = $request->file('csv_file');

        $data = Excel::toArray(new UsersImport, $path)[0];

        if (count($data) > 0) {
            $csv_header_fields = [];
            foreach ($data[0] as $key => $value) {
                $csv_header_fields[] = $key;
            }
            $csv_data = $data;
        } else return redirect()->back();

        return view('import.fields', compact('csv_header_fields', 'csv_data', 'db_fields'));
    }

    public function process(Request $request)
    {
        return $request->all();
        // $data = CsvData::find($request->csv_data_file_id);
        // $csv_data = json_decode($data->csv_data, true);
        // foreach ($csv_data as $row) {
        //     $contact = new Contact();
        //     foreach (config('app.db_fields') as $index => $field) {
        //         if ($data->csv_header) {
        //             $contact->$field = $row[$request->fields[$field]];
        //         } else {
        //             $contact->$field = $row[$request->fields[$index]];
        //         }
        //     }
        //     $contact->save();
        // }

        // return view('import_success');
    }
}
