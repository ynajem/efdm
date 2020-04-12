<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function objets()
    {
        return $this->hasMany(Objet::class)->latest('name');
    }
}
