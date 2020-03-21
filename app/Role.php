<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];
    public function abilities()
    {
        return $this->belongsToMany(Ability::class)->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function allowTo($ability)
    {
        return $this->abilities()->save($ability);
    }
}
