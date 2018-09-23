<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    //
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
