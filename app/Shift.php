<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    // public $timestamps = false;
    protected $guarded = [];

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('role');
    }

    public function added_by()
    {
        return $this->belongsTo(User::class, 'addedby');
    }

    public function super()
    {
        return $this->belongsTo(User::class, 'supervisor');
    }

    public function chef()
    {
        return $this->belongsTo(User::class, 'chefSalle');
    }

    public function chefE()
    {
        return $this->users()->where('role', 'chefE')->first();
    }

    public function esa()
    {
        return $this->users()->where('role', 'esa')->get();
    }

    public function renf()
    {
        return $this->users()->where('role', 'renf')->get();
    }

    public function team()
    {
        return $this->users->pluck('username', 'id')->all();
    }
}
