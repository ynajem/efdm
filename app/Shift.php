<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    // public $timestamps = false;
    protected $guarded = [];

    protected $dates = ['date', 'start_time', 'end_time'];

    // protected $dateFormat = 'U';

    const SHIFT_SELECT = [
        1 => "De 08 h à 14 h", 2 => "De 14 h à 21 h", 3 => "De 21 h à 08 h"
    ];

    // const SHIFT_SELECT = [
    //     1 => ['label' => "De 08 h à 14 h", 'start' => '8 hours', 'end' => '13 hours 59 minutes'],
    //     2 => ['label' => "De 14 h à 21 h", 'start' => '14 hours', 'end' => '20 hours 59 minutes'],
    //     3 => ['label' => "De 21 h à 08 h", 'start' => '21 hours', 'end' => '31 hours 59 minutes']
    // ];

    const EQUIPE_SELECT = ["A" => 'A', "B" => 'B', "C" => 'C', "D" => 'D', "E" => 'E'];

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('role');
    }

    public function added_by()
    {
        return $this->belongsTo(User::class, 'addedby');
    }

    public function super()
    {
        return $this->belongsTo(User::class, 'supervisor');
    }

    public function chef()
    {
        return $this->belongsTo(User::class, 'chefSalle');
    }

    public function chefE()
    {
        return $this->users()->where('role', 'chefE')->first();
    }

    public function esa()
    {
        return $this->users()->where('role', 'esa')->get();
    }

    public function esas()
    {
        return $this->users()->where('role', 'esa')->latest('username')->get()->pluck('id')->all();
    }

    public function renf()
    {
        return $this->users()->where('role', 'renf')->get();
    }

    public function renfs()
    {
        return $this->users()->where('role', 'renf')->latest('username')->get()->pluck('id')->all();
    }

    public function team()
    {
        return $this->users->pluck('username', 'id');
    }
}
