<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = ['abilities', 'users'];

    public function abilities()
    {
        return $this->belongsToMany(Ability::class)->withTimestamps();
    }

    public function allowTo($ability)
    {
        $this->abilities()->save($ability);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
