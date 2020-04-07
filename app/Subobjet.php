<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subobjet extends Model
{
    public function Objet()
    {
        return $this->belongsTo(Objet::class);
    }
}
