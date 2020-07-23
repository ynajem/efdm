<?php

namespace App;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    const SEX_SELECT = [
        'm' => 'Male',
        'f' => 'Female'
    ];

    const STATUS_SELECT = [
        'ready' => 'Ready',
        'active' => 'Active',
        'passive' => 'Passive',
    ];

    protected $guarded = ['roles'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }


    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }

    public function team()
    {
        return $this->entity->users->pluck('username', 'id');
    }

    public function shifts()
    {
        return $this->belongsToMany(Shift::class)->withPivot('role');
    }

    public function fullname()
    {
        return "{$this->firstname} {$this->lastname}";
    }

    public function getFullnameAttribute()
    {
        return "{$this->firstname} {$this->lastname}";
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function assignRole($role)
    {
        $this->roles()->save($role);
    }

    public function abilities()
    {
        return $this->roles->map->abilities->flatten()->pluck('name');
    }
}
