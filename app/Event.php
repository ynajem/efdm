<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sub_objet()
    {
        return $this->belongsTo(Sub_objet::class);
    }

    public function objet()
    {
        return $this->belongsTo(Objet::class);
    }
}
