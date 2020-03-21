<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_objet extends Model
{
    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function objet()
    {
        return $this->belongsTo(Objet::class);
    }
}
