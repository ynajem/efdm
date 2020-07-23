<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['id', 'event_date', 'event_time'];

    protected $dates = ['time'];

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
