<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Objet extends Model
{
    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }

    public function subobjets()
    {
        return $this->hasMany(Subobjet::class)->where('status', 'active')->orderBy('name', 'ASC');;
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function events()
    {
        return $this->hasManyThrough(Event::class, Subobjet::class);
    }
}
