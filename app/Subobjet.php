<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subobjet extends Model
{
    protected $guarded = ['id'];
    public function objet()
    {
        return $this->belongsTo(Objet::class);
    }

    public function lines()
    {
        return $this->hasMany(Line::class);
    }
}
