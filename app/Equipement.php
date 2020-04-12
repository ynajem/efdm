<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $guarded = [];

    public function subobjet()
    {
        return $this->belongsTo(Subobjet::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
