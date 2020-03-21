<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{
    public function sub_objets()
    {
        return $this->hasMany(Sub_objet::class);
    }
}

