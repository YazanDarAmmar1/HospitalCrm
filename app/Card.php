<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $guarded = [];

    public function User()
    {
        $this->hasMany(User::class, 'agent_id');
    }
}
