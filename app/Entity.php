<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class)->orderBy('username', 'ASC');
    }

    public function objets()
    {
        return $this->hasMany(Objet::class)->where('status', 'active')->orderBy('name', 'ASC');
    }

    public function shifts()
    {
        return $this->hasMany(Shift::class)->latest('date')->latest('shift');
    }

    public function team()
    {
        return $this->hasManyThrough(User::class, Shift::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class)->latest('date')->latest('time');
    }

    public function lines()
    {
        return $this->hasMany(Line::class)->latest('startdate')->latest('starttime');
    }

    public function equipements()
    {
        return $this->hasMany(Equipement::class)->latest('startdate')->latest('starttime');
    }
}
