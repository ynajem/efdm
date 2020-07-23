<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $guarded = ['id'];
    protected $dates = ['start_time', 'end_time'];
    const TYPES_SELECT = ['corr' => 'Corrective', 'prev' => 'Preventive'];

    public function subobjet()
    {
        return $this->belongsTo(Subobjet::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function objet()
    {
        return $this->belongsTo(Objet::class);
    }

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }
}
