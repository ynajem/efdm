<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport implements WithHeadingRow, ToCollection
{
    public function __construct()
    {
        $this->entities = [
            'Détection' => 1,
            'Traitement' => 4,
            'TI' => 3,
            'Telecom' => 2
        ];
    }
    // public function model(array $row)
    // {
    //     return new User([
    //         'username' => Str::lower($row['prenom'][0] . '.' . $row['nom']),
    //     ], [
    //         'lastname' => Str::title($row['nom']),
    //         'firstname' => Str::title($row['prenom']),
    //         'email' => Str::lower($row['prenom'][0] . '.' . $row['nom']) . '@onda.ma',
    //         'badge' => $row['matricule'],
    //         'title' => $row['fonction'],
    //         // 'qualif' => $row['qualif'],
    //         'entity_id' => $this->entities[$row['entity']],
    //         // 'dateHired' => $row['hired'],
    //         // 'password' => Hash::make(1234),
    //         'password' => 1234,
    //         'status' => 'active'

    //     ]);
    // }

    public function collection(Collection $rows)
    {
        // foreach ($rows as $row) {
        //     new User([
        //         'name' => $row['nom'],
        //     ]);
        // }
    }
}
