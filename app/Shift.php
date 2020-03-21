<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $guarded = [];

    public function status($status)
    {
        $this->status = $status;
        $this->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
